<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FlightReservation;
use App\ReserveFlight;
use App\HotelReservation;
use App\ReserveHotel;
use App\Contact;
class PagesController extends Controller
{
      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
    	$flight=FlightReservation::selectRaw("
                                count(*)")
                    ->groupBy('reserveflight_id')
                        ->get();
         $i=0;$t=0;             
    	foreach ($flight as $key => $value) {
    		
    		if($i<$value['count(*)'])
    		{
    			$i=$value['count(*)'];
    			$t++;
    		}
    	}
    	$flighttop=ReserveFlight::find($t);

    	$hotel=HotelReservation::selectRaw("
                                count(*)")
                    ->groupBy('reservehotel_id')
                        ->get();
         $i=0;$t=0;             
    	foreach ($hotel as $key => $value) {
    		
    		if($i<$value['count(*)'])
    		{
    			$i=$value['count(*)'];
    			$t++;
    		}
    	}
    	$hoteltop=ReserveHotel::find($t);

        $contact=Contact::query()->where('ok','=',1)->get();

    	return view('home')->with('flighttop',$flighttop)->with('hoteltop',$hoteltop)->with('contact',$contact);
        
    }
}
