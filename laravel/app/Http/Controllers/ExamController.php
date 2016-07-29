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
	public function ShowGuidelines()
	{
		$user = Auth::user();
		
		$studentStatus = StudentStatus::where('student_id', $user->uid)->first();
		if($studentStatus->end_exam){
			return ('Sorry!. The exam has ended. <a href="/logout">Logout</a>');
		}
		
		$data = ['name' => $user->name, 'set' => $user->set];
		return view('desktop.guidelines')->with($data);
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
		
		$set = $studentStatus->set;
		
		$questions = DB::table($set)
					->get(['question_no', 'question', 'section', 'a', 'b', 'c', 'd']);
		
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
			$questions[$key]->answered = $answered;		
			
		}
		
		$data = ['duration' => $duration, 'time_remaining' => $time_remaining, 'current_question' => $current_question, 'set' => $set, 'questions' => $questions];
		
		return response()->json($data);
	}
	
	public function UpdateAnswer(Request $request)
	{
		$this->validate($request, [
			 'question_no' => 'required'
		]);
		
		$question_no = $request->input('question_no');
		$answer = $request->input('answer');
		
		$question_col = 'q'.$question_no;
		
		$answers = Answers::firstOrCreate(['student_id' => Auth::user()->uid]);				
		$answers->$question_col = $answer;
		$answers->save();
				
		return response()->json(true);
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
	
	public function EndExam()
	{
		$studentStatus = StudentStatus::where('student_id', Auth::user()->uid)->first();
		$studentStatus->end_exam = 1;
		$studentStatus->save();
		
		return response()->json(true);
	}
}