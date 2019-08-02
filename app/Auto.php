<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    protected $table = 'auto';
    public $timestamps= false;
    protected $fillable = [
        'descripcion','modelo','placa','marcaid',
    ];
}
