<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function login()
    {
        //login's stuff :
        //validate the request
        $attributes = request()->validate([
            'email' => 'required|exists:users,email',
            'password'=>'required',
        ]);
        //attempt tp authenticate and log in the user
        //based on the provided credentials
        if (auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect('/')->with('success', 'welcome again !!');
        }
        //redirect the user to welcome page or home page  with a success flash msg
        //auth failed 2- way's
       // throw ValidationException::withMessages(['email' => 'your provided credentials couldn't be verified']);
        return back()
            ->withInput()
            ->withErrors(['email' => 'your provided credentials couldnt be verified']);
    }

    public function create()
    {
        return view('session.create');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', "goodbye");
    }
}
