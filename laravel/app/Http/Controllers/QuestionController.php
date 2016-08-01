<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use DB;

class QuestionController extends Controller
{	
	public function AddQuestion(Request $request)
	{	
		$msg = array();
		
		$this->validate($request, [
			 'question_set' => 'required',
			 'question_no' => 'required',
			 'section' => 'required',
			 'question' => 'required',
			 'correct_option' => 'required'			
		]);
		
		$question_set = $request->input('question_set');
		$question_no = $request->input('question_no');
		$section = $request->input('section');
		$question = $request->input('question');
		$correct_option = $request->input('correct_option');
		$a = $request->input('a');
		$b = $request->input('b');
		$c = $request->input('c');
		$d = $request->input('d');
				
		$result = DB::table($question_set)->insert(
					['question_no' => $question_no, 'question' => $question, 'section' => $section, 'a' => $a, 'b' => $b, 'c' => $c, 'd' => $d, 'correct_option' => $correct_option]
				);
		
		if($result){
			$msg = ['Successful'];
			return redirect('/admin/addquestion')->with(['msg' => $msg]);
		}
		
		$msg = ['Error'];		
		return redirect('/admin/addquestion')->with(['msg' => $msg]);
	}
	
	/*public function AddQuestionFunc($name, $email, $student_id, $password, $exam_id, $question_set)
	{
		$user = User::firstOrCreate(['uid' => $student_id]);
		
		$studentstatus = StudentStatus::firstOrCreate(['student_id' => $student_id]);
		
		$user->name = $name;
		$user->email = $email;
		$user->password = bcrypt($password);
		$user->uid = $student_id;
		$user->type = 'student';
		$user->save();
		
		$studentstatus->student_id = $student_id;
		$studentstatus->exam_id = $exam_id;
		$studentstatus->set = $question_set;
		$studentstatus->time_remaining = 60;
		$studentstatus->save();
		
		return true;
	}*/
	
}