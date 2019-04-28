<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReserveHotel;
use App\UserInfo;
use App\User;
use Auth;
use App\HotelReservation;
class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ReserveHotel=ReserveHotel::all();
        return view('hotel.index')->with('ReserveHotel',$ReserveHotel);
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
           $user1 = User::find(Auth::user()->id)->hotelreservation;
            if(isset($user))
            {

                if(isset($user1))
                {
                    return redirect()->back()->with('danger', 'You Already Reserve This Trip');   
                }else
                {
                $reserve=new HotelReservation();
                $reserve->user_id=Auth::User()->id;
                $reserve->reservehotel_id=request('id');
                $reserve->save();
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
        $hotel=ReserveHotel::find($id);
        return view('hotel.show')->with('hotel',$hotel);
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
