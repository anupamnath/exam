<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use DB;
use Session;

class LoginController extends Controller
{	
	public function ShowLogin()
	{		
		if (Auth::check()) {
			return redirect('/guidelines');
		} else {
			return view('/desktop.login');
		}
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
			return redirect('/guidelines');
		}
		
		return redirect('/login')->withInput($request->only('uid'))
                ->withErrors([
                    'error_msg' => 'Wrong Credentials'
                ]);
    }
	
}