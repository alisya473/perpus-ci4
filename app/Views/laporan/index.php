<!DOCTYPE html>
<html>
<head>
    <title>Laporan</title>
</head>
<body>

<h1>Laporan Peminjaman</h1>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>ID Anggota</th>
    <th>ID Buku</th>
    <th>Tanggal Pinjam</th>
    <th>Tanggal Kembali</th>
    <th>Status</th>
</tr>

<?php foreach ($laporan as $l): ?>

<tr>
    <td><?= $l['id'] ?></td>
    <td><?= $l['anggota_id'] ?></td>
    <td><?= $l['buku_id'] ?></td>
    <td><?= $l['tanggal_pinjam'] ?></td>
    <td><?= $l['tanggal_kembali'] ?></td>
    <td><?= $l['status'] ?></td>
</tr>

<?php endforeach; ?>

</table>

</body>
</html>