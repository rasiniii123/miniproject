<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    protected $Fillabel =[
        'email',
        'username',
        'telp',
        'tanggal_awal',
        'tanggal_akhir',
        'fasilitas',
        'metode_pembayaran',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
