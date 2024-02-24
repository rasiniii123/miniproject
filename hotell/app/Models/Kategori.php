<?php

namespace App\Models;

use App\Models\Room;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $fillable = [
        'kategori_id',
        'nama_kategori',
    ];

    public function room() : HasMany
    {
        return $this->hasMany(Room::class);
    }

    public function menu() : HasMany
    {
        return $this->hasMany(Menu::class);
    }
}
