<?php

use App\Http\Controllers\StudentController;
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
// inner 
Route::get('/libraries-stu-join', [StudentController::class, 'showStudents']);
// left join
Route::get('/libraries-stu-left-join', [StudentController::class, 'leftJoinStudentsWithLibraries']);
// right join
Route::get('/libraries-stu-right-join', [StudentController::class, 'rightJoinStudentsWithLibraries']);
// cross join
Route::get('/libraries-stu-cross-join', [StudentController::class, 'crossJoinStudentsWithLibraries']);
// self join
Route::get('/libraries-stu-self-join', [StudentController::class, 'studentsWithMentors']);