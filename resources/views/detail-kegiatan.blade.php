
@extends('layouts.app')

@section('title', 'Detail Kegiatan')

@section('content')

<div class="card">
    <h1>Detail Kegiatan Sekolah</h1>

    <h2>{{ $detail['judul'] }}</h2>

    <p><b>Tanggal:</b>
        {{ $detail['tanggal'] }}</p>

    <p>{{ $detail['deskripsi'] }}</p>

    <a href="/kegiatan">Kembali ke Kegiatan</a>
</div>

@endsection
