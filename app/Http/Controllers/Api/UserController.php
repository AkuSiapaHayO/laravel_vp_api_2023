<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getAllUser(){
        $users = User::all();
        return UserResource::collection($users);
    }

    public function checkPassword(){
        $users = User::all();
        $check = [];

        foreach($users as $user){
            array_push($check, Hash::check("Evan1234", $user->password));
        }
        return $check;
    }
}
