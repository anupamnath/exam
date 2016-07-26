<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'App\User',
		'secret' => '',
	],
	
	'google' => [
		'client_id' => '174572191336-kmjg7ejcrtib07gsgf4sa5pbcu8k944j.apps.googleusercontent.com',
		'client_secret' => 'Khc5NMP_2yzFNLXGc3OwZ4Ek',
		'redirect' => config('settings.domain').'/socialcallback/google',
	],
	
	'facebook' => [
		'client_id' => '413917702069708',
		'client_secret' => '080c208eabbcdf6187bba5a2473e79a3',
		'redirect' => config('settings.domain').'/socialcallback/facebook',
	],

];
