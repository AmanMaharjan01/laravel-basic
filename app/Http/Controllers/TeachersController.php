<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TeachersController extends Controller
{

    public function index () {

        //$teachers = \DB::select(\DB::raw("select * from teachers"));
        $teachers = DB::table('teacher')->paginate(5);

    	return view('students', ['teach' => $teachers]);
    }
}
