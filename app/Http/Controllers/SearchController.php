<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReserveFlight;
use App\HotelCompany;
use App\ReserveHotel;
class SearchController extends Controller
{
    public function flight(Request $flight)
    {
        
        $ReserveFlight=ReserveFlight::query()
   				->where('from', 'LIKE',request('from')) 
   				->orWhere('to', 'LIKE', request('to')) 
   				->get();
   		return view('pages.flight')->with('ReserveFlight',$ReserveFlight);
    }
    public function hotel(Request $hotel)
    {
        $HotelCompany=HotelCompany::query()
   				->where('country', 'LIKE',request('country')) 
   				->orWhere('city', 'LIKE', request('city')) 
   				->get();
   				foreach ($HotelCompany as  $f) {
   					$ReserveHotel=ReserveHotel::query()
   						->where('hotelcompany_id','LIKE',$f->id)->get();
   				}
   		
   		return view('hotel.index')->with('ReserveHotel',$ReserveHotel);
    }
}
