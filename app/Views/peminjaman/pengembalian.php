<!DOCTYPE html>
<html>
<head>
    <title>Pengembalian</title>
</head>
<body>

<h1>Pengembalian Buku</h1>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Anggota</th>
    <th>Buku</th>
    <th>Tanggal Pinjam</th>
    <th>Aksi</th>
</tr>

<?php foreach ($peminjaman as $p): ?>

<tr>
    <td><?= $p['id'] ?></td>
    <td><?= $p['anggota_id'] ?></td>
    <td><?= $p['buku_id'] ?></td>
    <td><?= $p['tanggal_pinjam'] ?></td>

    <td>
        <form action="/pengembalian/simpan" method="post">

            <input
                type="hidden"
                name="peminjaman_id"
                value="<?= $p['id'] ?>"
            >

            <button type="submit">
                Kembalikan
            </button>

        </form>
    </td>
</tr>

<?php endforeach; ?>

</table>

</body>
</html>