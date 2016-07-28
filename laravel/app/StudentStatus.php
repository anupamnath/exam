<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentStatus extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'student_status';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['student_id', 'exam_id', 'set', 'duration'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	/*protected $hidden = ['password', 'remember_token'];*/
}
