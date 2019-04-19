<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlightCompany extends Model
{
    protected $table = 'flightcompany';
    // Primary Key
    public $primaryKey = 'id';
      protected $fillable = [
        'id', 'name','image'
    ];
}
