@extends('layouts.app')

@section('title', 'Daftar Antrian')

@section('content')
<h1>Daftar Antrian</h1>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Pasien</th>
            <th>Dokter</th>
            <th>Nomor Antrian</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($antrians as $antrian)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $antrian->user->name }}</td>
            <td>{{ $antrian->dokter->nama }}</td>
            <td>{{ $antrian->nomor }}</td>
            <td>{{ $antrian->status }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
