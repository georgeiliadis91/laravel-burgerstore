<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Burger extends Model
{

    // overriding auto conection
    // protected $table='some name;
    protected $casts=['toppings'=>'array'];




}
