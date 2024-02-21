<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_id',
        'path_kamar',
        'nama_kamar',
        'harga',
        'deskripsi',
        'status',
        'kategori_id'
    ];
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
