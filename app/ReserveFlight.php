<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReserveFlight extends Model
{
     protected $table = 'reserveflight';
    // Primary Key
    public $primaryKey = 'id';
    public $timestamps = true;
    public $fillable = [
        'id', 'from','image1','image2','image3','image4','price','flightcompany_id','admin_id'
    ];

    
    public function FlightCompany()
    {
        return $this->belongsTo('App\FlightCompany','flightcompany_id');
    }
    public function Admin()
    {
        return $this->belongsTo('App\Admin','admin_id');
    }
     public function flightreservation()
    {
        return $this->hasMany('App\FlightReservation');
    }
}
