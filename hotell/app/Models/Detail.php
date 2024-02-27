<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $table = 'details';
    protected $fillable =[
        'path_kamar',
        'nama_kamar',
        'deskripsi',
        'harga',
        'rating',
        'ulasan',
    ];
    public function room()
    {
        return $this->belongsTo(Room::class ,'room_id');
    }
}

