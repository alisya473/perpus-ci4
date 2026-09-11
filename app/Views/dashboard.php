<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Perpustakaan</title>
</head>
<body>

<h1>Dashboard Perpustakaan</h1>

<hr>

<a href="/dashboard">Dashboard</a> |
<a href="/anggota">Anggota</a> |
<a href="/buku">Buku</a> |
<a href="/peminjaman">Peminjaman</a> |
<a href="/pengembalian">Pengembalian</a> |
<a href="/laporan">Laporan</a>

<hr>

<h3>Data Perpustakaan</h3>

<p>Jumlah Anggota: <?= $jumlahAnggota ?></p>

<p>Jumlah Buku: <?= $jumlahBuku ?></p>

<p>Jumlah Peminjaman: <?= $jumlahPeminjaman ?></p>

</body>
</html>