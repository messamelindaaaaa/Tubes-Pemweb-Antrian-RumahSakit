<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Puskesmas App')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('user.index') }}">Users</a></li>
                <li><a href="{{ route('kategori.index') }}">Kategori</a></li>
                <li><a href="{{ route('dokter.index') }}">Dokter</a></li>
                <li><a href="{{ route('jadwal.index') }}">Jadwal</a></li>
                <li><a href="{{ route('antrian.index') }}">Antrian</a></li>
                <li><a href="{{ route('notifikasi.index') }}">Notifikasi</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Puskesmas App</p>
    </footer>
</body>
</html>
