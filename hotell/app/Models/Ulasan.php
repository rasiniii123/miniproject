<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;

    protected $table = 'ulasan';
    protected $fillable = [
        'rating',
        'ulasan',
        'user_id',
        'pesanan_id',
        'rooms_id'
    ];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
