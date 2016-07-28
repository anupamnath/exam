<?php
namespace App\Http\Controllers;
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
		$data = ['name' => $user->name, 'set' => $user->set];
		return view('desktop.guidelines')->with($data);
	}
	
	public function FetchQuestionPaper()
	{
		$user = Auth::user();
		
		$studentStatus = StudentStatus::where('student_id', $user->uid)->first();
		
		$duration = $studentStatus->duration;
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
			
			if($markedQuery){
				if($markedQuery->$question_col == 1){
					$marked = true;
				}				
			} else{
				$marked = false;
			}
			$questions[$key]->marked = $marked;
			
			/*----------------answered-----------------------*/
			$answeredQuery = Marked::where('student_id', $user->uid)
					->first([$question_col]);
			if($answeredQuery){
				if($answeredQuery->$question_col){
					$answered = $answeredQuery->$question_col;
				}				
			} else{
				$answered = false;
			}	
			$questions[$key]->answered = $answered;		
			
		}
		
		$data = ['duration' => $duration, 'time_remaining' => $time_remaining, 'current_question' => $current_question, 'set' => $set, 'questions' => $questions];
		
		return response()->json($data);
	}
}