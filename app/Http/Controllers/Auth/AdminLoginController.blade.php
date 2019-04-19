<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin');
    }


    public function showLoginForm()
    {
        return view('auth.admin-login');
    }


    public function login(Request $request)
    {
          $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);


         if( Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember))
         {

            return redirect()->intended(route('admin.dashboard'));
         }else
         {

            return redirect()->back()->withInput($request->only('email,remember'));
         }
    }
        /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->guest(route( 'admin.login' ));
    }
}
