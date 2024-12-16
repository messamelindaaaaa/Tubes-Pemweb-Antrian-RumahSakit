@extends('layouts.app')

@section('title', 'Daftar Kategori Dokter')

@section('content')
<h1>Daftar Kategori Dokter</h1>
<a href="{{ route('kategori.create') }}">Tambah Kategori</a>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $kategori)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $kategori->nama }}</td>
            <td>
                <a href="{{ route('kategori.edit', $kategori->id) }}">Edit</a>
                <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST" style="display:inline;">
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
