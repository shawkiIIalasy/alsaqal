<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserInfo;
use Auth;
class PaymentController extends Controller
{
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$info=new UserInfo();
    	$info->visa_number=request('visa_number');
    	$info->visa_expiration=request('visa_expiration');
    	$info->visa_code=request('visa_code');
    	$info->phone=request('phone');
    	$info->country=request('country');
    	$info->address=request('address');
    	$info->city=request('city');
    	$info->postal_code=request('postal_code');
    	$info->user_id=Auth::User()->id;
    	$info->save();
    	return redirect('/profile');
        
    }

}
