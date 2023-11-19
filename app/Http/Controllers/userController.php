<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function SignUp(Request $req){
        $formfields = $req->validate([
            'name'=> ['required'],
            'email' => ['required'],
            'password' => ['required'],

        ]);
        $formfields['password'] = bcrypt($formfields['password']);
        $user = User::create($formfields);
        auth()->login($user);
        return redirect('/')->with('message','welcome' . auth()->user()->name);
    }


    public function LogOut(Request $req){
        auth()->logout();
        $req->session()->regenerateToken();
        return back();
    }

    public function SignIn(Request $req){
        $formFields =   $req->validate([
            'name' => 'required',
            'password' => 'required'
        ]);



    if (auth()->attempt($formFields)) {
        $req->session()->regenerateToken();
        return redirect('/')->with('success', 'Welcome back ' . auth()->user()->name);
    } else {
        return back()->with('success', 'Invalid Credentials, Try Again!!!');
    }
}  

}


