<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    // Primary Key
    public $primaryKey = 'id';
    public $fillable = [
        'id'
    ];
}
