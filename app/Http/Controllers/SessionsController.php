<?php

namespace App\Http\Controllers;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create(){
        return view('login.create');
    }
    public function store(){
        $attributes = request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(! auth()->attempt($attributes)){
            //Failed validation
            //Validation Exception
            throw ValidationException::withMessages(['email'=>'Invalid email or password']);
        }
        
        session()->regenerate();
        
        return redirect('/')->with('success', 'Welcome back!');

        // return back()
        //     ->withInput()
        //     ->withErrors(['email'=>'Invalid email or password']);
    }
    public function destroy(){
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
