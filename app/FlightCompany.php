<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlightCompany extends Model
{
    protected $table = 'flightcompany';
    // Primary Key
    public $primaryKey = 'id';
    public $fillable = [
        'id', 'name','image','admin_id'
    ];
    public function ReserveFlight()
    {
        return $this->hasMany('App\ReserveFlight');
    }

    
    public function Admin()
    {
        return $this->belongsTo('App\Admin','admin_id');
    }
}
