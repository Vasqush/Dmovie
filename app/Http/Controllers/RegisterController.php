<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function create(){
        return view('register.create');
    }

    function store(){
        $attributes = request()->validate([
            'username'=> 'required|max:255|unique:users,username',
            'name'=>'required|max:255|min:3',
            'email'=>'required|email|max:255|unique:users,email',
            'password'=>'required|min:8|max:255'
            ]
        );


        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success','Your account has been created.');

    }
}
