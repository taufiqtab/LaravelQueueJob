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

Route::get('/create/{name}/{length}', 'CreateFile@createFile');

Route::get('/queue/{name}/{length}', function($name, $length){
    $details['name'] = $name;
    $details['length'] = $length;
    dispatch(new App\Jobs\JobCreateFile($details));   
    dd("Berhasil $name $length");
});
