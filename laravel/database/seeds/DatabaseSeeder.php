<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\StudentStatus;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
		
		$this->call('UserTableSeeder');
		
		$this->call('ExamTableSeeder');
		
		$this->call('StudentStatusTableSeeder');

        $this->command->info('db tables seeded!');
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
		
		/*---Admin----*/
		
        $password = bcrypt('password');
		
		User::create([
			'name' => 'admin',
			'email' => 'admin@admin.com',
			'password' => $password,
			'uid' => '',
			'type' => 'admin'
		]);
		
		/*---Student 1----*/
		
        $password = bcrypt('student1');
		
		User::create([
			'name' => 'student1',
			'email' => 'student1@test.com',
			'password' => $password,
			'uid' => 'std1',
			'type' => 'student'
		]);
		
		/*---Student 2----*/
		
        $password = bcrypt('student2');
		
		User::create([
			'name' => 'student2',
			'email' => 'student2@test.com',
			'password' => $password,
			'uid' => 'std2',
			'type' => 'student'
		]);
		
		/*---Student 3----*/
		
        $password = bcrypt('student3');
		
		User::create([
			'name' => 'student3',
			'email' => 'student3@test.com',
			'password' => $password,
			'uid' => 'std3',
			'type' => 'student'
		]);
    }

}

class ExamTableSeeder extends Seeder {

    public function run()
    {
		DB::table('exam_details')->delete();
		
		DB::table('exam_details')->insert([
			'exam_name' => 'Assam Down Town University Online Examination',
			'duration' => 60,
			'sets' => 3,
			'questions_per_set' => 60
		]);
	}
}

class StudentStatusTableSeeder extends Seeder {

    public function run()
    {
		DB::table('student_status')->delete();
		
		StudentStatus::create([
			'student_id' => 'std1',
			'exam_id' => '1',
			'set' => 'set_1',
			'time_remaining' => '60'
		]);
		
		StudentStatus::create([
			'student_id' => 'std2',
			'exam_id' => '1',
			'set' => 'set_2',
			'time_remaining' => '60'
		]);
		
		StudentStatus::create([
			'student_id' => 'std3',
			'exam_id' => '1',
			'set' => 'set_3',
			'time_remaining' => '60'
		]);
	}
}
