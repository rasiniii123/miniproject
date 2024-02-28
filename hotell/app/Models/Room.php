<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    public function menus(): HasMany
    {
        return $this->hasMany(Menu::class);
    }
    public function pesanan(): HasMany
    {
        return $this->hasMany(Pesanan::class);
    }
    public function Ulasan(): HasMany
    {
        return $this->hasMany(Ulasan::class);
    }
}
