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
		
		$this->call('SetTableSeeder');
		
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

class SetTableSeeder extends Seeder {

    public function run()
    {
		DB::table('set_1')->delete();
		
		DB::table('set_1')->insert([
			['question_no' => 1, 'question' => 'Ten years ago, P was half of Q\'s age. If the ratio of their present ages is 3:4, what will be the total of their present ages?', 'section' => 'age', 'a' => '45', 'b' => '40', 'c' => '35', 'd' => '30', 'correct_option' => 'c'],
			['question_no' => 2,'question' => 'Test question 2?', 'section' => 'typeA', 'a' => '23', 'b' => '76', 'c' => '11', 'd' => '45', 'correct_option' => 'a'],
			['question_no' => 3,'question' => 'Test question 3?', 'section' => 'typeB', 'a' => 'aaa', 'b' => 'bbb', 'c' => 'ccc', 'd' => 'ddd', 'correct_option' => 'd']
		]);
		
		DB::table('set_2')->delete();
		
		DB::table('set_2')->insert([
			['question_no' => 1,'question' => 'Father is aged three times more than his son Sunil. After 8 years, he would be two and a half times of Sunil\'s age. After further 8 years, how many times would he be of Sunil\'s age?', 'section' => 'age', 'a' => '4 times', 'b' => '5 times', 'c' => '2 times', 'd' => '3 times', 'correct_option' => 'c'],
			['question_no' => 2,'question' => 'Test question 5?', 'section' => 'typeA', 'a' => '23', 'b' => '76', 'c' => '11', 'd' => '45', 'correct_option' => 'a'],
			['question_no' => 3,'question' => 'Test question 6?', 'section' => 'typeB', 'a' => 'aaa', 'b' => 'bbb', 'c' => 'ccc', 'd' => 'ddd', 'correct_option' => 'd']
		]);
		
		DB::table('set_3')->delete();
		
		DB::table('set_3')->insert([
			['question_no' => 1,'question' => 'A man is 24 years older than his son. In two years, his age will be twice the age of his son. What is the present age of his son?', 'section' => 'age', 'a' => '23 years', 'b' => '22 years', 'c' => '21 years', 'd' => '20 years', 'correct_option' => 'b'],
			['question_no' => 2,'question' => 'Test question 7?', 'section' => 'typeA', 'a' => '23', 'b' => '76', 'c' => '11', 'd' => '45', 'correct_option' => 'a'],
			['question_no' => 3,'question' => 'Test question 8?', 'section' => 'typeB', 'a' => 'aaa', 'b' => 'bbb', 'c' => 'ccc', 'd' => 'ddd', 'correct_option' => 'd']
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
			'duration' => '60',
			'time_remaining' => '60'
		]);
		
		StudentStatus::create([
			'student_id' => 'std2',
			'exam_id' => '1',
			'set' => 'set_2',
			'duration' => '60',
			'time_remaining' => '60'
		]);
		
		StudentStatus::create([
			'student_id' => 'std3',
			'exam_id' => '1',
			'set' => 'set_3',
			'duration' => '60',
			'time_remaining' => '60'
		]);
	}
}
