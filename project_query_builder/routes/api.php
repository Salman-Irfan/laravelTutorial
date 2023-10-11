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

// ##### READ #####
// all users
Route::get('/getAllUsers', [UserController::class, 'showUsers']);
// specific users by id
Route::get('/users/{id}', [UserController::class, 'showUserById'])->whereNumber('id');
// get users having same names
Route::get('/users/{name}', [UserController::class, 'showUserByName'])->whereAlphaNumeric('name');
// get specific columns
Route::get('/specific-details', [UserController::class, 'showSpecificColumns']);
// find by condition
Route::get('/condition', [UserController::class, 'showByCondition']);

// ##### CREATE #####
Route::post('/create-user', [UserController::class, 'addUser']);
// #### UPDATE #####
Route::get('/update-user', [UserController::class, 'updateUser']);
// #### DELETE #####
Route::get('/delete-user/{id}', [UserController::class, 'deleteUser']);