<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/', 'Dashboard::index');

$routes->get('/dashboard', 'Dashboard::index');

$routes->get('/anggota', 'Anggota::index');

$routes->get('/buku', 'Buku::index');

$routes->get('/peminjaman', 'Peminjaman::index');
$routes->get('/peminjaman/tambah', 'Peminjaman::tambah');
$routes->post('/peminjaman/simpan', 'Peminjaman::simpan');

$routes->get('/pengembalian', 'Pengembalian::index');
$routes->post('/pengembalian/simpan', 'Pengembalian::simpan');

$routes->get('/laporan', 'Laporan::index');