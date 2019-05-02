<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReserveFlight;
use App\UserInfo;
use App\User;
use Auth;
use App\FlightReservation;
class flightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ReserveFlight=ReserveFlight::all();
        return view('pages.flight')->with('ReserveFlight',$ReserveFlight);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::guest())
        {
            return redirect('/login');
        }else
        {
           $user = User::find(Auth::user()->id)->user_info;
           $user1 = User::find(Auth::user()->id)->flightreservation;
            if(isset($user))
            {
        
                
                if(isset($user1)&&$user1->reserveflight_id==request('id'))
                {
                    return redirect()->back()->with('danger', 'You Already Reserve This Trip');   
                }else
                {
                $reserve=new FlightReservation();
                $reserve->user_id=Auth::User()->id;
                $reserve->reserveflight_id=request('id');
                $reserve->class=request('class');
                $reserve->adult=request('adult');
                $reserve->children=request('children');
                $reserve->save();
                $flight=ReserveFlight::find(request('id'));
                $flight->adult=$flight->adult-$reserve->adult;
                $flight->children=$flight->children-$reserve->children;
                $flight->save();
                return redirect('/profile');
            }}else
            {
                return view('visa.confirm');
            }
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flight=ReserveFlight::find($id);
        return view('pages.show')->with('flight',$flight);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
