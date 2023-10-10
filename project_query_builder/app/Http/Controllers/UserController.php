<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class UserController extends Controller
{
    // all users
    public function showUsers(){
        $users = DB::table('users')->get();
        return $users;
    }
    // user by id
    public function showUserById($id)
    {
        $user = DB::table('users')
            ->where('id', $id)
            ->first();
        // echo $user;
        if ($user) {
            return $user;
        } else {
            return response()->json(['message' => 'User not found'], 404);
        }
    }
    // all users by same name
    public function showUserByName($name)
    {
        $user = DB::table('users')
            ->where('name', $name)
            ->get();
        // echo $user;
        if ($user) {
            return $user;
        } else {
            return response()->json(['message' => 'User not found'], 404);
        }
    }
    // showSpecificColumns
    public function showSpecificColumns()
    {
        $user = DB::table('users')
            ->select('name', 'email')
            ->get();
        return $user;
        // or
        // $user = DB::table('users')
        //     ->pluck('name', 'email');
        // return $user;
    }
    // show by condition
    public function showByCondition()
    {
        $user = DB::table('users')
            ->where([
                ['name', 'user10'],
                ['email', 'user10@gmail.com']
            ])
            ->get();
        return $user;
    }
}
