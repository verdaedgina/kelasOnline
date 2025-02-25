@extends('layouts.app')

@section('title', 'Kelas Online') <!-- Menambahkan judul halaman -->

@section('content')
    <style>
        .content {
            font-family: 'Courier New', Courier, monospace;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }
        .content {
            display: flex;
            justify-content: flex-end;
            padding: 50px;
            padding-right: 100px; /* Adjust this value to move the content more to the right */
        }
        .card {
            background-color: #D19A9A;
            padding: 20px;
            margin: 10px;
            border-radius: 10px;
            width: 300px;
            font-size: 18px;
            color: black;
        }
        .card:nth-child(2) {
            background-color: #F4BFBF;
        }
    </style>

    <div class="content">
        <div class="card">
            Kami menyediakan layanan pembelajaran online yang mudah diakses untuk siswa-siswi SMK dengan jurusan RPL.
        </div>
        <div class="card">
            Pada layanan kami menyediakan level progress untuk para pengguna setiap kali pengguna belajar di layanan kami.
        </div>
        <div class="card">
        Mendukung siswa-siswi SMK jurusan RPL dalam mengejar prestasi akademik dengan menyediakan platform pembelajaran online yang interaktif,dan praktis.
        </div>
        <div class="card">
        Dapat mengembangkan keterampilan mereka melalui fitur pembelajaran berbasis level, di mana setiap kemajuan dicatat dan dihargai untuk mendorong motivasi belajar.
        </div>
    </div>
@endsection
