<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelCompany extends Model
{
    protected $table = 'hotelcompany';
    // Primary Key
    public $primaryKey = 'id';
    public $fillable = [
        'id', 'name','image','admin_id'
    ];
    public function ReserveHotel()
    {
        return $this->hasMany('App\ReserveHotel');
    }

    
    public function Admin()
    {
        return $this->belongsTo('App\Admin','admin_id');
    }
}
