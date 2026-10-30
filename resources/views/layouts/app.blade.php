
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - SDN Puspamukti</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header>
    <h2>SDN PUSPAMUKTI</h2>

    <nav>
        <a href="/">Beranda</a>
        <a href="/profil">Profil</a>
        <a href="/guru">Daftar Guru</a>
        <a href="/kegiatan">Kegiatan</a>
    </nav>
</header>

<main class="container">
    @yield('content')
</main>

<footer>
    <p>© 2026 SDN Puspamukti | Sistem Informasi Sekolah</p>
</footer>

</body>
</html>
