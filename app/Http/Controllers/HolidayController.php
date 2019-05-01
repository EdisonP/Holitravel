<?php

namespace Holitravel\Http\Controllers;

use Illuminate\Http\Request;
use Holitravel\Holidays;
use Auth;
use Illuminate\Support\Facades\DB;

class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        if ($user_id !== 1){
            return view('internals.oops');
        }
        $holidays = Holidays::all();
        return view('internals.viewHList', compact('holidays'));
    }

    /**
     * Display a listing of resource from user_id
     */
    public function userIndex()
    {
        $user_id = Auth::user()->id;
        $holidays =  DB::table('holidays')->where('user_id', $user_id)->get();
        
        return view('internals.viewUserH', compact('holidays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('internals.bookH');
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
            'dateOfFlight' => 'required|date',
            'adult' => 'required|numeric',
        ]);
        $holiday = holiday::create($validatedData);

        return redirect('/viewHList')->with('success', 'holiday is successfully saved');
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
        $holidays = Holidays::where('travelID', $id)->firstOrFail();

        return view('internals.editH', compact('holidays'));
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
        $validatedData = $request->validate([
            'fromDest' => 'required|max:255|regex:[A-Za-z1-9 ]',
            'toDest' => 'required|max:255|regex:[A-Za-z1-9 ]',
            'dateOfFlight' => 'required|max:255',
            'adult' => 'required|numeric',
            'child' => 'required|numeric',
            'elderly' => 'required|numeric',
            'status' => 'required|numeric',
        ]);
        Holidays::where('travelID', $id)->update($validatedData);

        return redirect('/viewHList')->with('success', 'Holiday '. $id . ' has successfully updated!');
        }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $holiday = holiday::findOrFail($id);
        $holiday->delete();

        return redirect('/viewHList')->with('success', 'holiday is successfully deleted');
    }
 
    public function storeHoliday(){
 
        $Holiday = new Holidays();
 
        $Holiday->fromDest = request('fromDest');
        $Holiday->toDest = request('toDest');
        $Holiday->dateOfFlight = request('dateOfFlight');
        $Holiday->adult = request('adult');
        $Holiday->child = request('child');
        $Holiday->elderly = request('elderly');
        $Holiday->user_id = Auth::user()->id;
        $Holiday->status = 0;
        $Holiday->save();
 
        return redirect('/bookSuccess');
    }
}