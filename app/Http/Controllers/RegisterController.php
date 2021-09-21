<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }
    public function store(){
        //create.blade.php user

       $attributes = request()->validate([
           'username'=>"required|max:222|unique:users,username",
            //'username'=>['required','max:222','min:3',Rule::unique('users','username')]
            'name'=>"required|max:222",
            'email'=>"required|email|max:222|unique:users,email",
            'password'=>"required|min:7",
        ]);

      $user =User::create($attributes);
      session()->flash('success', 'Welcome! You have successfully registered');
      // log the user in
        auth()->login($user);
        return redirect('/');

        // return redirect('/')->with('success', 'Welcome! You have successfully registered');

    }
}
