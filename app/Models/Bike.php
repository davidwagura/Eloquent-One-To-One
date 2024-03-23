<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    use HasFactory;


    public $table = 'bikes';


    public function user() 
    {
        return $this->belongsTo('App\Models\User');
    }
}
