<?php
namespace App\Http\Controllers;
use Auth;

class ExamController extends Controller
{
	public function ShowGuidelines()
	{
		$user = Auth::user();
		$data = ['name' => $user->name, 'set' => $user->set];
		return view('desktop.guidelines')->with($data);
	}
}