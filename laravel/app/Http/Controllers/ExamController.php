<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use App\StudentStatus;
use App\Marked;
use App\Answers;

class ExamController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function ShowGuidelines()
	{
		$user = Auth::user();
		
		$studentStatus = StudentStatus::where('student_id', $user->uid)->first();
		if($studentStatus->end_exam){
			return view('desktop.thankyou');
		}
		
		$data = ['name' => $user->name, 'set' => $user->set, 'photo' => $user->photo];
		return view('desktop.instructions')->with($data);
	}
	
	public function FetchQuestionPaper()
	{
		$user = Auth::user();
		
		$studentStatus = StudentStatus::where('student_id', $user->uid)->first();
		
		$exam_id = $studentStatus->exam_id;
		$exam_details = DB::table('exam_details')->whereId($exam_id)->first();
		$duration = $exam_details->duration;
		
		$time_remaining = $studentStatus->time_remaining;
		$current_question = $studentStatus->current_question;
		
		if($current_question == 0){
			$current_question = 1;
		}
		
		$set = $studentStatus->set;
		
		$questions = DB::table($set)
					->orderBy('question_no')
					->take(60)
					->get(['question_no', 'question', 'section', 'a', 'b', 'c', 'd']);
		
		/*----start array index from 1 instead of 0 to work with frontend--------*/
		array_unshift($questions,""); 
		unset($questions[0]);
		/*------------//------------*/
		foreach($questions as $key => $value){
			
			$question_col = 'q'.$value->question_no;
			/*-------------------marked------------------*/
			$markedQuery = Marked::where('student_id', $user->uid)
					->first([$question_col]);
			
			$marked = false;
			if($markedQuery){
				if($markedQuery->$question_col == 1){
					$marked = true;
				}
			}
			$questions[$key]->marked = $marked;
			
			/*----------------answered-----------------------*/
			$answeredQuery = Answers::where('student_id', $user->uid)
					->first([$question_col]);
			
			$answered = false;
			if($answeredQuery){
				if($answeredQuery->$question_col){
					$answered = $answeredQuery->$question_col;
				}				
			}
			$questions[$key]->answer = $answered;		
			
		}
		
		$no_of_questions = count($questions);
		
		$data = ['duration' => $duration, 'time_remaining' => $time_remaining, 'current_question' => $current_question, 'set' => $set, 'no_of_questions' => $no_of_questions,'questions' => $questions];
		
		return response()->json($data);
	}
	
	public function UpdateAnswer(Request $request)
	{
		$this->validate($request, [
			 'question_no' => 'required'
		]);
		
		$question_no = $request->input('question_no');
		$answer = $request->input('answer');
		
		$this->UpdateAnswerFunc($question_no, $answer);
				
		return response()->json(true);
	}
	
	public function UpdateAnswerFunc($question_no, $answer = null)
	{		
		$question_col = 'q'.$question_no;
		
		$answers = Answers::firstOrCreate(['student_id' => Auth::user()->uid]);				
		$answers->$question_col = $answer;
		$answers->save();
				
		return true;
	}
	
	public function ClearAnswer(Request $request)
	{
		$this->validate($request, [
			 'question_no' => 'required'
		]);
		
		$question_no = $request->input('question_no');
		$question_col = 'q'.$question_no;
		
		$answers = Answers::firstOrCreate(['student_id' => Auth::user()->uid]);				
		$answers->$question_col = null;
		$answers->save();
				
		return response()->json(true);
	}
	
	public function MarkQuestion(Request $request)
	{
		$this->validate($request, [
			 'question_no' => 'required'
		]);
		
		$question_no = $request->input('question_no');		
		$question_col = 'q'.$question_no;
		
		$marked = Marked::firstOrCreate(['student_id' => Auth::user()->uid]);
		$marked->$question_col = 1;
		$marked->save();
				
		return response()->json(true);
	}
	
	public function UnmarkQuestion(Request $request)
	{
		$this->validate($request, [
			 'question_no' => 'required'
		]);
		
		$question_no = $request->input('question_no');		
		$question_col = 'q'.$question_no;
		
		$marked = Marked::firstOrCreate(['student_id' => Auth::user()->uid]);
		$marked->$question_col = 0;
		$marked->save();
				
		return response()->json(true);
	}
	
	public function CurrentQuestion(Request $request)
	{
		$this->validate($request, [
			 'question_no' => 'required'
		]);
		
		$question_no = $request->input('question_no');
		
		$studentStatus = StudentStatus::where('student_id', Auth::user()->uid)->first();
		$studentStatus->current_question = $question_no;
		$studentStatus->save();
		
		return response()->json(true);
	}
	
	public function UpdateTime(Request $request)
	{
		$this->validate($request, [
			 'time_remaining' => 'required'
		]);
		
		$time_remaining = $request->input('time_remaining');
		
		$studentStatus = StudentStatus::where('student_id', Auth::user()->uid)->first();
		$studentStatus->time_remaining = $time_remaining;
		$studentStatus->save();
		
		return response()->json(true);
	}
	
	public function EndExam(Request $request)
	{
		$studentStatus = StudentStatus::where('student_id', Auth::user()->uid)->first();
		$studentStatus->end_exam = 1;
		$studentStatus->save();
		
		$answers = $request->input('answers');
		
		foreach($answers as $key=>$answer){
			if ($key<=0) continue;
			
			if($answer!='false'){
				$this->UpdateAnswerFunc($key, $answer);
			}
		}
		
		return response()->json(true);
	}
}