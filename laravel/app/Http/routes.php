<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', 'WelcomeController@index');
/*define('THUMBS_DIR','thumbs');*/

Route::filter('serviceCSRF',function(){
if (Session::token() != Request::header('csrf_token')) {
    return Response::json([
        'message' => 'Security token doesn\'t match, possible CSRF attack.'
    ], 418);
}
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/404', function(){
	return view('desktop.404');
});

Route::get('/home', ['middleware' => 'sysCheckMiddleware', function(){
	return view('desktop.login');
}]);

Route::get('/', ['middleware' => 'sysCheckMiddleware', function(){
	return view('desktop.login');
}]);

Route::get('/login', 'LoginController@ShowLogin');

Route::get('/logout', 'LoginController@DoLogout');

Route::post('/login', 'LoginController@DoLogin');

Route::get('/instructions', 'ExamController@ShowGuidelines');

Route::get('/questions', function(){
	return view('desktop.questions');
});

Route::get('/fetch_question_paper', 'ExamController@FetchQuestionPaper');

Route::get('/update_answer', 'ExamController@UpdateAnswer');

Route::get('/clear_answer', 'ExamController@ClearAnswer');

Route::get('/mark_question', 'ExamController@MarkQuestion');

Route::get('/unmark_question', 'ExamController@UnmarkQuestion');

Route::get('/current_question', 'ExamController@CurrentQuestion');

Route::get('/update_time', 'ExamController@UpdateTime');

Route::get('/end_exam', 'ExamController@EndExam');

Route::get('/admin', function(){
	if(Auth::check()){
		if(Auth::user()->type == 'admin'){
			return view('admin.dashboard');
		}
	}
	
	return view('admin.login');
});

Route::post('/adminlogin', 'LoginController@AdminLogin');

Route::get('/adminlogout', 'LoginController@AdminLogout');

Route::get('/admin/addstudent', function(){
	return view('admin.addstudent');
});

Route::post('/admin/addstudent', 'StudentController@AddStudent');

Route::get('/admin/multistudents', function(){
	return view('admin.multistudents');
});

Route::get('/admin/addquestion', function(){
	return view('admin.addquestion');
});

Route::post('/admin/addquestion', 'QuestionController@AddQuestion');

Route::get('/excel', 'StudentController@AddMultiStudents');

Route::post('/endexam', 'ExamController@EndExam');

Route::get('/thankyou', function(){
	return view('desktop.thankyou');
});

Route::post('/rating', 'LoginController@RateExam');

Route::get('/closewindow', function(){
	return ('The exam has ended. Please close the window.');
});

Route::get('/getphoto', 'LoginController@getStudentPhoto');

Route::get('/howto', function(){
	return view('desktop.howto');
});

