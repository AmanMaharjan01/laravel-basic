<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentsController extends Controller
{
    
    public function index () {


    	// $students = \DB::select(\DB::raw("select * from students"));
    	$students = DB::table('student')->paginate(5);

    	return view('students', ['std' => $students]);
	}
	
	public function store()
	{
		request()->validate([

 			'name' => 'required|max:10',
 			'address' => 'required',
 		]);

 		$student = [
 			'name' => request('name'),
 			'address' => request('address'),
 		];

		$insertedStudent = \DB::table('student')->insert($student);

 		if ($insertedStudent) {

 			return redirect('/students')->with('status', 'Student inserted successfully!!');
 		}
 	}

	public function edit($id) {

		$student = \DB::table('student')->where('id', $id)->first();

		// dd($student);
		return view('edit-student', ['std' => $student]);
 	}
 }
