<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// add another route
Route::get('/post', function () {
    return view('post');
});

// another method
// Route::view('routeName', '/viewFile');
Route::view('/about', '/about');

// laravel routing parameters
// Route::get('/post/{id}', function (String(optional) $id){
// });
    
// it'accept alphanumeric and special characters also spaces
Route::get('/users/{id}', function (String $id) {
    return view('users', ['id' => $id]);
});

// problem with above approach
// if user enters no parameters, no page will be shown

// optional parameters
Route::get('/blogs/{id?}', function (String $id = null) {
    if($id){
        return view('blogs/blog', ['id' => $id]);
    }else {
        return view('blogs/blogs');
    }
});
