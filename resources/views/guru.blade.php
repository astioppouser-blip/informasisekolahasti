
@extends('layouts.app')

@section('title', 'Daftar Guru')

@section('content')

<div class="card">
    <h1>Daftar Guru SDN Puspamukti</h1>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Guru</th>
            <th>Jabatan</th>
        </tr>

        @foreach ($guru as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item['nama'] }}</td>
            <td>{{ $item['jabatan'] }}</td>
        </tr>
        @endforeach

    </table>
</div>

@endsection
