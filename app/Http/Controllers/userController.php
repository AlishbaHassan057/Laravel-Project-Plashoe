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
        $user = User::create($formfields);
        auth()->login($user);
        return redirect('/')->with('message','welcome' . auth()->user()->name);
    }
}
