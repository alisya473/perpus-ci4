<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Perpustakaan</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>

<div class="navbar">

    <div class="logo">
        <a href="<?= base_url('/') ?>">
            Perpustakaan
        </a>
    </div>

    <div>
        <a href="<?= base_url('/') ?>">Dashboard</a>
        <a href="<?= base_url('anggota') ?>">Anggota</a>
        <a href="<?= base_url('buku') ?>">Buku</a>
        <a href="<?= base_url('peminjaman') ?>">Peminjaman</a>
        <a href="<?= base_url('pengembalian') ?>">Pengembalian</a>
        <a href="<?= base_url('laporan') ?>">Laporan</a>
    </div>

</div>

<div class="container">