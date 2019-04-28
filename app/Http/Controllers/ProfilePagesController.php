<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

use App\FlightReservation;
class ProfilePagesController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function flight()
    {
        $user=User::find(Auth::User()->id);
        $flight=FlightReservation::query()->where('user_id','=',Auth::User()->id)->get();

        return view('profile.upcoming')->with('flight',$flight)->with('user',$user);
    }
}
