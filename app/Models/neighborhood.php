<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class neighborhood extends Model
{
    use HasFactory;

    protected $table='neighborhoods';

    public $timestamps = false;

    //dentro de fillable defino los datos que se guardan en la bbdd
    protected $fillable=[
        'neighborhood'
    ];

    //campos protegidos
    protected $guarded=[];

    protected $hidden = [
        'id',
    ];
}
