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
    return view('welcome');
});

Route::get('foo/bar', function () {
    return 'Hello World';
});

// Third Route method â€“ Root URL with or without name will match this method
// ? makes the parameter optional
Route::get('/user/{name?}', function($name = 'Virat Gandhi') {
    echo "Name: " . $name;
});

Route::get('admin-panel', function() {
    return redirect('admin-panel/dashboard');
});

Route::get('admin-panel/dashboard', function () {
    return 'Dashboard';
});

Route::get('admin', [
    'middleware' => 'admin:client',
    'uses' => 'AdminController@index',
]);
Route::get('terminate', [
    'middleware' => 'terminate',
    'uses' => 'ABCController@index',
]);
Route::get('/usercontroller/path',[
   'middleware' => 'First',
   'uses' => 'UserController@showPath'
]);



/*
 * arguments in second part for user is optional/*
 */
Route::get('namit/{age}/{weight?}', function ($age ,$weight=100) {
    echo$age."</br>";
    echo $weight;
});


/*
 * Example for Controller with arguments
 */

Route::get('namit1/{age}/{weight?}','NamitController@namit');