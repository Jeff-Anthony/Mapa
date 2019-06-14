<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class reserva extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'reservas';
    protected $fillable = [
        'nombre', 'apellido','dni', 'acom','fecha', 'hora'
    ];
}

