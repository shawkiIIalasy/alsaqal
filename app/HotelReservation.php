<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelReservation extends Model
{
    protected $table = 'hotelreservation';
    // Primary Key
    public $primaryKey = 'id';
    public $fillable = [
        'id','user_id'
    ];
      public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
