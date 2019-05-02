<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\HotelReservation;
use App\FlightReservation;
use App\Contact;
use App\FlightCompany;
use App\HotelCompany;
class AdminController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users=User::count();
        $p1=HotelReservation::count()+FlightReservation::count();
        $company=FlightCompany::count()+HotelCompany::count();
        $message=Contact::count();
        return view('admin.dashborad')->with('users',$users)->with('p1',$p1)->with('company',$company)->with('message',$message);
    }
}
