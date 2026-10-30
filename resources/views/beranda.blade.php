
@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<div class="hero">
    <h1>Selamat Datang di Website</h1>
    <h2>{{ $sekolah['nama'] }}</h2>
    <p>Media Informasi dan Profil Sekolah</p>
    <a href="/profil" class="btn">Lihat Profil Sekolah</a>
</div>

<div class="card">
    <h2>Informasi Sekolah</h2>

    <p><b>Nama Sekolah:</b>
        {{ $sekolah['nama'] }}</p>

    <p><b>Kepala Sekolah:</b>
        {{ $sekolah['kepala'] }}</p>

    <p><b>Alamat:</b>
        {{ $sekolah['alamat'] }}</p>
</div>

@endsection
