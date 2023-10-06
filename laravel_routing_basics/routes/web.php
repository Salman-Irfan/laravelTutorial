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

// multiple parameters
Route::get('/news/{id?}/comments/{commentid?}', function(string $id, string $comment = null) {
    if($id){
        return "<h1>News Id: ".$id." </h1> <h2>Comment no: ".$comment." </h2>";
    }else{
        return "<h1>No data found</h1>";
    }
});

// parameters with constraints
Route::get('/contacts/{no}', function(string $no){
    return 'Contact no: ' .$no;

})->whereNumber('no'); // $no must be a number
// other constraints are whereAlpha, whereAlphaNumeric
// whereIn('category', ['movie', 'song'])
// where('id', '[@0-9]+')