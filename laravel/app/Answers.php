<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'answers';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['student_id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	/*protected $hidden = ['password', 'remember_token'];*/
}
