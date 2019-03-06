<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
            'email' => 'required']);
        
            //Create user
            $user = new User;
            $user -> fName = $request->input('fName');
            $user -> lName = $request->input('lName');
            $user -> email = $request->input('email');
            $user -> password = $request->input('password');

            $password = $request->input('password');
            $cPassword = $request->input('cPassword');
            //Save User
            if ($password === $cPassword){
                $user->save();
                return redirect('/')->with('registerSuccess', 'Successfully Registered!');
            }
            else {
                
            }
    }
}
