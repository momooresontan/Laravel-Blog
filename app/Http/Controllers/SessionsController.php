<?php

namespace App\Http\Controllers;

class SessionsController extends Controller
{
    public function create(){
        return view('login.create');
    }
    public function store(){
        $attributes = request()->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        if(auth()->attempt($attributes)){
            return redirect('/')->with('success', 'Welcome back!');
        }

        //Failed validation
        return back()->withErrors(['email'=>'Your provided credentials could not be verified']);
    }
    public function destroy(){
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
