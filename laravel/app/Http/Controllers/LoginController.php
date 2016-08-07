<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use DB;
use Session;
use App\Rating;
use App\StudentStatus;

use App\Http\Controllers\ExamController;

class LoginController extends Controller
{	
	public function __construct()
    {
        $this->middleware('sysCheckMiddleware');
    }
	
	public function ShowLogin()
	{		
		return view('/desktop.login');
	}
	
	public function DoLogout()
	{
		Session::flush();
		Auth::logout();
		
		return redirect('/');
	}
	
    public function DoLogin(Request $request)
    {
		
		$this->validate($request, [
			'uid' => 'required',
			'password' => 'required'
		]);
		
		$uid = $request->input('uid');
		$password = $request->input('password');
		
				
		if (Auth::attempt(['uid' => $uid, 'password' => $password, 'type' => 'student']))
		{
			return redirect('/instructions');
		}
		
		return redirect('/login')->withInput($request->only('uid'))
                ->withErrors([
                    'error_msg' => 'Wrong Credentials'
                ]);
    }
	
	public function getStudentPhoto(Request $request){
		$this->validate($request, [
			'photo' => 'required'
		]);
		
		$encoded_photo = $request->input('photo');
		
		//Get the base-64 string from data
		/*$filteredData=substr($photo, strpos($photo, ",")+1);*/
		 
		//Decode the string
		$binary_photo=base64_decode($encoded_photo);
		 
		//create directory
		$structure = public_path('/images/students/'.Auth::user()->id);
		if (!file_exists($structure)) {
			mkdir($structure, 0777, true);
		}
		$file = $structure.'/img_'.time().'.jpg';		
		
		//Save the image
		file_put_contents($file, $binary_photo);
		
		return response()->json(true);
	}
	
	public function AdminLogin(Request $request)
    {
		$this->validate($request, [
			'email' => 'required|email',
			'password' => 'required'
		]);
		
		$email = $request->input('email');
		$password = $request->input('password');
		$remember = $request->input('remember');
				
		if (Auth::attempt(['email' => $email, 'password' => $password, 'type' => 'admin'], $remember))
		{
			return redirect('/admin');
		}
		
		return redirect('/admin')->withInput($request->only('email'))
                ->withErrors([
                    'error_msg' => 'Wrong Credentials'
                ]);
	}
	
	public function AdminLogout()
	{
		Session::flush();
		Auth::logout();
		
		return redirect('/admin');
	}
	
	public function RateExam(Request $request){
		$rating = $request->input('rating');
		$review = $request->input('review');
		
		$rate = Rating::firstOrCreate(['student_id' => Auth::user()->uid]);
		$rate->rating = $rating;
		$rate->review = $review;
		$rate->save();
		
		$studentStatus = StudentStatus::where('student_id', Auth::user()->uid)->first();
		$studentStatus->end_exam = 1;
		$studentStatus->save();
		
		return $this->DoLogout();
	}
	
}