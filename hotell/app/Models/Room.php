<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'alamat',
        'harga_permalam',
        'rating',
        'type_kamar',
        'keterangan',
        'fasilitas',
        'foto',
    ];
}
