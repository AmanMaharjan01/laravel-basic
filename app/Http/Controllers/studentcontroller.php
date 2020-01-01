<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    public function mystudent()
    {
        $query = "Select id from student";

        $students = \DB::select(\DB::raw($query));

        return view('student',['student' => $students]);
    }
}
