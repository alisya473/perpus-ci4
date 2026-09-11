<!DOCTYPE html>
<html>
<head>
    <title>Tambah Peminjaman</title>
</head>
<body>

<h1>Tambah Peminjaman</h1>

<form action="/peminjaman/simpan" method="post">

    <label>Anggota</label>

    <select name="anggota_id" required>
        <?php foreach ($anggota as $a): ?>
            <option value="<?= $a['id'] ?>">
                <?= $a['nama'] ?>
            </option>
        <?php endforeach; ?>
    </select>

    <br><br>

    <label>Buku</label>

    <select name="buku_id" required>
        <?php foreach ($buku as $b): ?>
            <option value="<?= $b['id'] ?>">
                <?= $b['judul'] ?>
            </option>
        <?php endforeach; ?>
    </select>

    <br><br>

    <label>Tanggal Pinjam</label>

    <input type="date" name="tanggal_pinjam" required>

    <br><br>

    <button type="submit">Simpan</button>

</form>

</body>
</html>