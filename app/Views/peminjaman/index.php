<!DOCTYPE html>
<html>
<head>
    <title>Peminjaman</title>
</head>
<body>

<h1>Data Peminjaman</h1>

<a href="/dashboard">Dashboard</a>
<a href="/peminjaman/tambah">Tambah Peminjaman</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Anggota</th>
        <th>Buku</th>
        <th>Tanggal Pinjam</th>
        <th>Status</th>
    </tr>

    <?php foreach ($peminjaman as $p): ?>
    <tr>
        <td><?= $p['id'] ?></td>
        <td><?= $p['anggota_id'] ?></td>
        <td><?= $p['buku_id'] ?></td>
        <td><?= $p['tanggal_pinjam'] ?></td>
        <td><?= $p['status'] ?></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>