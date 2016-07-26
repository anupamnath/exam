<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

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

        $this->command->info('User table seeded!');
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
			'type' => 'admin',
			'set' => ''
		]);
		
		/*---Student 1----*/
		
        $password = bcrypt('student1');
		
		User::create([
			'name' => 'student1',
			'email' => 'student1@test.com',
			'password' => $password,
			'uid' => 'std1',
			'type' => 'student',
			'set' => 'set1'
		]);
		
		/*---Student 2----*/
		
        $password = bcrypt('student2');
		
		User::create([
			'name' => 'student2',
			'email' => 'student2@test.com',
			'password' => $password,
			'uid' => 'std2',
			'type' => 'student',
			'set' => 'set2'
		]);
		
		/*---Student 3----*/
		
        $password = bcrypt('student3');
		
		User::create([
			'name' => 'student3',
			'email' => 'student3@test.com',
			'password' => $password,
			'uid' => 'std3',
			'type' => 'student',
			'set' => 'set3'
		]);
    }

}
