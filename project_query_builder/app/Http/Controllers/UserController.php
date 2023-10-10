<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $user = DB::table('users')->where('id', $id)->first();
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
        $user = DB::table('users')->where('name', $name)->get();
        // echo $user;
        if ($user) {
            return $user;
        } else {
            return response()->json(['message' => 'User not found'], 404);
        }
    }
}
