<?php

namespace Holitravel\Http\Controllers;

use Holitravel\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::guest()){
            return view('internals.oops');
        }elseif (Auth::user()->id !== 1){
            return view('internals.oops');
        }
        $users = User::all();
        return view('internals.viewUserList', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fName' => 'required|max:255|regex:[A-Za-z1-9 ]',
            'lName' => 'required|max:255|regex:[A-Za-z1-9 ]',
            'email' => 'required|max:255|regex:[A-Za-z1-9 ]',
        ]);
        $users = User::create($validatedData);

        return redirect('/viewUserList')->with('success', 'User is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::guest()){
            return view('internals.oops');
        }elseif (Auth::user()->id !== 1){
            return view('internals.oops');
        }
        $users = User::findOrFail($id);
        return view('internals.editUser', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Auth::guest()){
            return view('internals.oops');
        }elseif (Auth::user()->id !== 1){
            return view('internals.oops');
        }
        $validatedData = $request->validate([
            'fname' => 'required|max:255|regex:[A-Za-z1-9 ]',
            'lname' => 'required|max:255|regex:[A-Za-z1-9 ]',
        ]);
        User::whereId($id)->update($validatedData);

        return redirect('/viewUserList')->with('success', 'User is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::guest()){
            return view('internals.oops');
        }elseif (Auth::user()->id !== 1){
            return view('internals.oops');
        }
        $user = User::findOrFail($id);
        $user->delete($id);

        return redirect('/viewUserList')->with('success', 'User is successfully deleted');
    }
}

