<?php

namespace App\Controllers;

use App\Models\AnggotaModel;
use App\Models\BukuModel;
use App\Models\PeminjamanModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $anggota = new AnggotaModel();
        $buku = new BukuModel();
        $peminjaman = new PeminjamanModel();

        $data = [
            'jumlahAnggota' => $anggota->countAll(),
            'jumlahBuku' => $buku->countAll(),
            'jumlahPeminjaman' => $peminjaman->countAll(),
        ];

        return view('dashboard', $data);
    }
}