<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
 	protected $fillable = [
        'pd_name','fabric','details','rate','status',
    ];
}
