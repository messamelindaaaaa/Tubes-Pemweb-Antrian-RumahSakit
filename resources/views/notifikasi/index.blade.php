@extends('layouts.app')

@section('title', 'Notifikasi')

@section('content')
<h1>Notifikasi</h1>

<ul>
    @foreach ($notifikasis as $notifikasi)
    <li>{{ $notifikasi->pesan }}</li>
    @endforeach
</ul>
@endsection
