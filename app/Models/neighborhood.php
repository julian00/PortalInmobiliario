<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class neighborhood extends Model
{
    use HasFactory;

    protected $table='neighborhoods';

    public $timestamps = false;

    protected $fillable=[
        'neighborhood'
    ];

    protected $hidden = [
        'id',
    ];
}
