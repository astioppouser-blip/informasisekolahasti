
@extends('layouts.app')

@section('title', 'Kegiatan Sekolah')

@section('content')

<div class="card">
    <h1>Informasi Kegiatan Sekolah</h1>

    @foreach ($kegiatan as $id => $item)

    <div class="kegiatan">
        <h2>{{ $item['judul'] }}</h2>

        <p>{{ $item['tanggal'] }}</p>

        <p>{{ $item['deskripsi'] }}</p>

        <a href="/kegiatan/{{ $id }}">
            Lihat Detail
        </a>
    </div>

    @endforeach
</div>

@endsection
