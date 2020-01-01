<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ParentsController extends Controller
{
    
    public function index () {

        $parents = DB::table('parents')->paginate(5);

    	return view('students', ['parents' => $parents]);
    }
}
