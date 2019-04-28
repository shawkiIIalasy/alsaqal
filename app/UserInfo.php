<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
   protected $table = 'user_info';
    // Primary Key
    public $primaryKey = 'id';
    public $fillable = [
        'id', 'user_id','image'
    ];
    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
