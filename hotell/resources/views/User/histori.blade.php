@extends('layouts.yss');
@section('content');
<style>
    .gambar-kamar {
        max-width: 100px; /* Atur lebar maksimum gambar */
        max-height: 100px; /* Atur tinggi maksimum gambar */
    }

    .status-terisi {
        background-color: #FAF2DF; /* Warna latar belakang */
        color: #FFBF43; /* Warna teks */
        padding: 5px 40px; /* Ukuran padding (atas/bawah, kiri/kanan) */
        border-radius: 20px; /* Menjadikan sudut elemen membulat */
        display: inline-block; /* Menjadikan elemen sebagai blok yang memungkinkan pengaturan lebar */
    }
    .accept-terisi {
        background-color: #CAFCB9; /* Warna latar belakang */
        color: #20EC4D; /* Warna teks */
        padding: 5px 40px; /* Ukuran padding (atas/bawah, kiri/kanan) */
        border-radius: 20px; /* Menjadikan sudut elemen membulat */
        display: inline-block; /* Menjadikan elemen sebagai blok yang memungkinkan pengaturan lebar */
    }
    .reject-terisi {
        background-color: #F0B2B2; /* Warna latar belakang */
        color: #F02020; /* Warna teks */
        padding: 5px 40px; /* Ukuran padding (atas/bawah, kiri/kanan) */
        border-radius: 20px; /* Menjadikan sudut elemen membulat */
        display: inline-block; /* Menjadikan elemen sebagai blok yang memungkinkan pengaturan lebar */
    }

</style>
<h2 style="text-align: center; font-weight:bold;">HISTORY</h2>
<table class="table" style="margin-top: 50px;">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Foto Kamar</th>
        <th scope="col">Nama Kamar</th>
        <th scope="col">Status</th>
        <th scope="col">Total</th>
        <th scope="col">Aksi</th>
        <th scope="col">Ulasan</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td><img src="images/kamar1.png" alt="Foto Kamar 1" class="gambar-kamar"></td>
        <td>Luxury Room</td>
        <td><span class="status-terisi">Panding</span></td>
        <td>Rp.5.000.000</td>
        <td><button style="background-color: #FF0000; color: #FFFFFF; padding: 5px 20px; border: none; border-radius: 5px; cursor: pointer;">Batalkan</button></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td><img src="images/kamar2.png" alt="Foto Kamar 1" class="gambar-kamar"></td>
        <td>Couple Room</td>
        <td><span class="accept-terisi">Accept</span></td>
        <td>Rp.3.000.000</td>
        <td></td>
        <td><button style="background-color: #283E58; color: #FFFFFF; padding: 5px 20px; border: none; border-radius: 5px; cursor: pointer;">Tambah Ulasan</button></td>
      </tr>

      <tr>
        <th scope="row">3</th>
        <td><img src="images/kamar3.png" alt="Foto Kamar 1" class="gambar-kamar"></td>
        <td>Family Room</td>
        <td><span class="reject-terisi">Reject</span></td>
        <td>Rp.8.000.000</td>
        <td><button style="background-color: #FF0000; color: #FFFFFF; padding: 5px 20px; border: none; border-radius: 5px; cursor: pointer;">Alasan Pembatalan</button></td>
        <td></td>
      </tr>
    </tbody>
  </table>
@endsection
