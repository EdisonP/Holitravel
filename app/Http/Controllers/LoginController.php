<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required']);

            $user = new User;
            $user -> email = $request->input('email');
            $user -> password = $request->input('password');

            return redirect('/')->with('loginSuccess', 'Login Successfully!');
    }
}
