<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Histori extends Model
{
    use HasFactory;
    protected $table='Histori';
    protected $fillable=[
        'path_kamar',
        'nama_kamar',
        'status',
        'total',
    ];
}
