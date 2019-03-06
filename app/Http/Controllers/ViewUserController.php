<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ViewUserController extends Controller
{
    public function getUser(){
        $users = User::all();
        return view('viewUser')->with('viewUser', $users);
    }
}
