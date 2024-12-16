@extends('layouts.app')

@section('title', 'Jadwal Dokter')

@section('content')
<h1>Jadwal Dokter</h1>
<a href="{{ route('jadwal.create') }}">Tambah Jadwal</a>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Dokter</th>
            <th>Hari</th>
            <th>Jam</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jadwals as $jadwal)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $jadwal->dokter->nama }}</td>
            <td>{{ $jadwal->hari }}</td>
            <td>{{ $jadwal->jam }}</td>
            <td>
                <a href="{{ route('jadwal.edit', $jadwal->id) }}">Edit</a>
                <form action="{{ route('jadwal.destroy', $jadwal->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
