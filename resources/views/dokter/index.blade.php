@extends('layouts.app')

@section('title', 'Daftar Dokter')

@section('content')
<h1>Daftar Dokter</h1>
<a href="{{ route('dokter.create') }}">Tambah Dokter</a>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nama Dokter</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dokters as $dokter)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $dokter->nama }}</td>
            <td>{{ $dokter->kategori->nama }}</td>
            <td>
                <a href="{{ route('dokter.edit', $dokter->id) }}">Edit</a>
                <form action="{{ route('dokter.destroy', $dokter->id) }}" method="POST" style="display:inline;">
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
