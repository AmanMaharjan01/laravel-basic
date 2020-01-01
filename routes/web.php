<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('template');
});

Route::get('content', function () {

	return view('content');
});


Route::get('articles', 'ArticlesController@index');



Route::get('students', 'StudentsController@index');
Route::get('teachers', 'TeachersController@index');
Route::get('parents', 'ParentsController@index');

Route::get('create-student', function () {

	return view('create-student');
});

Route::post('students', 'StudentsController@store');

Route::get('students/edit/{id}', 'StudentsController@edit');





/*Dec 25th
review student, teacher, parents 
php to blade syntax
query builder - crud syntax
create student

migration
model
replace query builder with eloquent

middleware
create, edit, delete 
7 restful to controller - route resources


form handling - validations, custom error message, success message
*/
















// Route::get('/customer/{id?}', function ($id = 1) {

// 	$customers = [
// 		['id' => 1, 'name' => 'Ram'],
// 		['id' => 2, 'name' => 'Shyam'],
// 		['id' => 3, 'name' => 'Hari'],
		
// 	];

// 	$customer = '';

// 	foreach ($customers as $cust) {

// 		if ($cust['id'] == $id) {

// 			$customer = $cust;
// 		}
// 	}

// 	if ($customer == '') {

// 		abort(404);
// 	}


// 	return view('cust-details', ['customer' => $customer]);
	
// });


//ROUTE GROUP

// Route::get('show-routes', function () {

// 	\Artisan::call('route:list');

// 	return '<pre>'.\Artisan::output().'</pre>';
// });




