<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factory extends Model
{
    protected $fillable = [
        'factory_on','production_capacity','employe_male','employe_female',
    ];



}
