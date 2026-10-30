
@extends('layouts.app')

@section('title', 'Profil Sekolah')

@section('content')

<div class="card">
    <h1>Profil Sekolah</h1>

    <h3>{{ $profil['nama'] }}</h3>

    <p>{{ $profil['sejarah'] }}</p>

    <h2>Visi Sekolah</h2>
    <p>{{ $profil['visi'] }}</p>

    <h2>Misi Sekolah</h2>

    <ul>
        @foreach ($profil['misi'] as $misi)
            <li>{{ $misi }}</li>
        @endforeach
    </ul>
</div>

@endsection
