<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(UserController::class)->group(function () {
    // ##### READ #####
    // all users
    Route::get('/getAllUsers', 'showUsers');
    // specific users by id
    Route::get('/users/{id}', 'showUserById')->whereNumber('id');
    // get users having same names
    Route::get('/users/{name}', 'showUserByName')->whereAlphaNumeric('name');
    // get specific columns
    Route::get('/specific-details', 'showSpecificColumns');
    // find by condition
    Route::get('/condition', 'showByCondition');

    // ##### CREATE #####
    Route::post('/create-user', 'addUser');
    // #### UPDATE #####
    Route::put('/update-user/{id}', 'updateUser');
    // #### DELETE #####
    Route::get('/delete-user/{id}', 'deleteUser');
});