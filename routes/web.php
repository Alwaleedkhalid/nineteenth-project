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


// Route::get('/', function () {

//     $report =  App\report::orderby('id','desc')->simplepaginate(3);
//     return view('index' , compact('report'));
// });

Auth::routes();

Route::get('/', 'IndexController@index'); // index route ..

Route::resource('company', 'CompanyController'); // company route with resources 

Route::resource('employee', 'EmployeeController'); // employee route with resources 




// Route::get('/dashboard', 'HomeController@index')->name('home');

// Route::get('/dashboard', 'HomeController@index')->name('home');

//admin resurses
// Route::resource('admin-panel', 'AdminController');
// Route::GET('admin-panel/user-reports/{$id}', 'AdminController@show');

//report
// Route::resource('report', 'MainTController');
// Route::get('/search', 'MainTController@search');

//User reports
// Route::get('user-reports', 'UserReportsController@index');
// Route::get('user-reports/{id}', 'UserReportsController@show');



// Authentication
// Route::resource('/auth', 'AuthenticationController@store')->name('auth');


// Route::get('/admin-panel/{$id}', 'AdminController@show');
