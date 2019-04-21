<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\FlightCompany;
use App\ReserveFlight;
class ReserveFlightController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $FlightCompany=FlightCompany::all();
        $ReserveFlight=ReserveFlight::paginate(8);
        return view('admin.pages.flight')->with('FlightCompany',$FlightCompany)->with('ReserveFlight',$ReserveFlight);
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
        if($request->hasFile('image1')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image1')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image1')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore1= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image1')->storeAs('/public/images', $fileNameToStore1);
        }else
        {
            $fileNameToStore1="";
        }
        if($request->hasFile('image2')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image2')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image2')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore2= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image2')->storeAs('/public/images', $fileNameToStore2);
        }else
        {
            $fileNameToStore2="";
        }
        if($request->hasFile('image3')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image3')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image3')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore3= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image3')->storeAs('/public/images', $fileNameToStore3);
        }else
        {
            $fileNameToStore3="";
        }
        if($request->hasFile('image4')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image4')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image4')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore4= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image4')->storeAs('/public/images', $fileNameToStore4);
        }else
        {
            $fileNameToStore4="";
        }

        $flight=new ReserveFlight();
        $flight->from=request('from');
        $flight->to=request('to');
        $flight->price=request('price');
        $flight->flightcompany_id=request('company_id');
        $flight->image1=$fileNameToStore1;
        $flight->image2=$fileNameToStore2;
        $flight->image3=$fileNameToStore3;
        $flight->image4=$fileNameToStore4;
        $flight->save();
        return redirect('/admin/reserveflight');

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
