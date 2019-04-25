<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlightCompany extends Model
{
    protected $table = 'flightcompany';
    // Primary Key
    public $primaryKey = 'id';
    public $fillable = [
        'id', 'name','image'
    ];
     public function ReserveFlight()
    {
        return $this->belongsTo('App\ReserveFlight');
    }
}
