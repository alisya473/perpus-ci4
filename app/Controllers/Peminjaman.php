<?php

namespace App\Controllers;

use App\Models\PeminjamanModel;
use App\Models\AnggotaModel;
use App\Models\BukuModel;

class Peminjaman extends BaseController
{
    public function index()
    {
        $model = new PeminjamanModel();

        $data['peminjaman'] = $model->findAll();

        return view('peminjaman/index', $data);
    }

    public function tambah()
    {
        $anggota = new AnggotaModel();
        $buku = new BukuModel();

        $data = [
            'anggota' => $anggota->findAll(),
            'buku' => $buku->findAll()
        ];

        return view('peminjaman/tambah', $data);
    }

    public function simpan()
    {
        $model = new PeminjamanModel();

        $model->insert([
            'anggota_id' => $this->request->getPost('anggota_id'),
            'buku_id' => $this->request->getPost('buku_id'),
            'tanggal_pinjam' => $this->request->getPost('tanggal_pinjam'),
            'status' => 'Dipinjam'
        ]);

        return redirect()->to('/peminjaman');
    }
}