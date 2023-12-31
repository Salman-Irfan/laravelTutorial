<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class UserController extends Controller
{
    // ######### READ #############
    // all users
    public function showUsers()
    {
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
            ->orWhere('age', '>=', 36)
            ->get();
        return $user;
    }

    // ######### CREATE #########
    public function addUser(Request $request)
    {
        $user = DB::table('users')->insertGetId([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'city' => $request->city,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        if ($user) {
            $newUser = DB::table('users')->where('id', $user)->first();
            return response()->json([
                'message' => 'User created successfully',
                'user' => $newUser
            ]);
        }
    }

    // update
    public function updateUser(Request $request ,$id)
    {
        $updatedUser = DB::table('users')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'age' => $request->age,
                'city' => $request->city,
                'updated_at' => now()
            ]);
        if ($updatedUser) {
            $updatedUser = DB::table('users')->where('id', $id)->first();
            return response()->json([
                'message' => 'User updated successfully',
                'user' => $updatedUser
            ]);
        }
    }
    // delete
    public function deleteUser($id)
    {
        $user = DB::table('users')
            ->where('id', $id)
            ->delete();
    }
}