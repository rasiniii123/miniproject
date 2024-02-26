<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
            "nama_kategori" => "iPhone",
        ]);

        Kategori::create([
            "nama_kategori" => "iPad",
        ]);

        Kategori::create([
            "nama_kategori" => "Mac",
        ]);

        Kategori::create([
            "nama_kategori" => "Accessories",
        ]);

        Kategori::create([
            "nama_kategori" => "Watch",
        ]);
    }
}
