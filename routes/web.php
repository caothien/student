<?php
use App\Http\Middleware\CheckAge;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blur-image', 'ImageController@blurImage');

Route::get('/export-excel', 'StudentController@exportExcel');

Route::get('hello/{id}', 'StudentController@hello')->middleware('check_age');

Route::get('bye', 'StudentController@bye');

Route::get('demo-ajax', 'StudentController@demoAjax');

Route::get('/demo-ajax/populate','StudentController@populate');

Route::get('/test-ajax', 'StudentController@testAjax');

/* Login */
Auth::routes();

Route::get('/home', 'HomeController@index');


