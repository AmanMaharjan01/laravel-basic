<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // for students
        for ($i = 1 ; $i <= 20 ; $i ++) {

        	$student = [
        		'name' => 'Student ' . $i,
        		'phone_no' => rand(1111111111, 9999999999),
        		'address' => 'student address ' . $i 
        	];

        	echo 'Adding student ' . $i . ' to students table'.PHP_EOL;
        	\DB::table('students')->insert($student);
        }

        // for teachers
        for ($i = 1 ; $i <= 20 ; $i ++) {

        	$teacher = [
        		'name' => 'Teacher ' . $i,
        		'phone_no' => rand(1111111111, 9999999999),
        		'address' => 'teacher address ' . $i 
        	];

        	echo 'Adding teacher ' . $i . ' to teachers table'.PHP_EOL;
        	\DB::table('teachers')->insert($teacher);
        }

        // for parents
        for ($i = 1 ; $i <= 20 ; $i ++) {

        	$parent = [
        		'name' => 'Parent ' . $i,
        		'phone_no' => rand(1111111111, 9999999999),
        		'address' => 'parent address ' . $i 
        	];

        	echo 'Adding parent ' . $i . ' to parents table'.PHP_EOL;
        	\DB::table('parents')->insert($parent);
        }
    }
}
