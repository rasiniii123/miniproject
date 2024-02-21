<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menus';
    protected $fillable =[
        'path_kamar',
        'nama_kamar',
        'deskripsi',
        'harga',
    ];
    public function room()
    {
        return $this->belongsTo(Room::class ,'room_id');
    }       
}
