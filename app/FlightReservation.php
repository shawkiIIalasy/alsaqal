<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlightReservation extends Model
{
   protected $table = 'flightreservation';
    // Primary Key
    public $primaryKey = 'id';
    public $fillable = [
        'id','user_id','reserveflight_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
     public function reserveflight()
    {
        return $this->belongsTo('App\ReserveFlight','reserveflight_id');
    }
}
