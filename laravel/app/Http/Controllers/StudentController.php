<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\StudentStatus;
use Excel;

class StudentController extends Controller
{	
	public function AddStudent(Request $request)
	{
		$msg = array();
		
		$this->validate($request, [
			 'name' => 'required',
			 'email' => 'required|email',
			 'student_id' => 'required',
			 'exam_id' => 'required',
			 'password' => 'required|confirmed',
			 'password_confirmation' => 'required',
			 'question_set' => 'required'
		]);
		
		$name = $request->input('name');
		$email = $request->input('email');
		$student_id = $request->input('student_id');
		$exam_id = $request->input('exam_id');
		$password = $request->input('password');
		$password_confirmation = $request->input('password_confirmation');
		$question_set = $request->input('question_set');
		$photo = $request->input('photo');
		
		if($this -> AddStudentFunc($name, $email, $student_id, $photo, $password, $exam_id, $question_set)){
			$msg = ['Successful'];
			return redirect('/admin/addstudent')->with(['msg' => $msg]);
		}
		
		$msg = ['Error'];		
		return redirect('/admin/addstudent')->with(['msg' => $msg]);
		
	}
	
	public function AddStudentFunc($name, $email, $student_id, $photo = null, $password, $exam_id, $question_set )
	{
		$user = User::firstOrCreate(['uid' => $student_id]);
		
		$studentstatus = StudentStatus::firstOrCreate(['student_id' => $student_id]);
		
		$user->name = $name;
		$user->email = $email;
		$user->password = bcrypt($password);
		$user->uid = $student_id;
		$user->type = 'student';
		$user->photo = $photo;
		$user->save();
		
		$studentstatus->student_id = $student_id;
		$studentstatus->exam_id = $exam_id;
		$studentstatus->set = $question_set;
		$studentstatus->time_remaining = 60;
		$studentstatus->save();
		
		return true;
	}
	
	public function AddMultiStudents($filename = 'students.xlsx'){
		Excel::load(storage_path('/uploads/'.$filename), function($reader) {

			$reader->each(function($sheet) {				
				$this -> AddStudentFunc($sheet->name, $sheet->email, $sheet->uid, $sheet->photo, $sheet->password, $sheet->examid, $sheet->questionset );
			});

		});
		
		return 'Successful';
	}
	
}