<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReserveHotel extends Model
{
    protected $table = 'reservehotel';
    // Primary Key
    public $primaryKey = 'id';
    public $timestamps = true;
    public $fillable = [
        'id', 'from','image1','image2','image3','image4','price','hotelcompany_id','admin_id'
    ];

    
    public function HotelCompany()
    {
        return $this->belongsTo('App\HotelCompany','hotelcompany_id');
    }
    public function Admin()
    {
        return $this->belongsTo('App\Admin','admin_id');
    }
}
