<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    
    public function index () {

    	//DB grab
    	$query = "select * from articles";

    	$articles = \DB::select(\DB::raw($query));
    	//pass it to view

    	return view('articles', ['articles' => $articles]);
    }
}
