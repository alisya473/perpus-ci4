<?php

namespace App\Controllers;

use App\Models\PeminjamanModel;
use App\Models\PengembalianModel;

class Pengembalian extends BaseController
{
    public function index()
    {
        $peminjaman = new PeminjamanModel();

        $data['peminjaman'] = $peminjaman
            ->where('status', 'Dipinjam')
            ->findAll();

        return view('pengembalian/index', $data);
    }

    public function simpan()
    {
        $peminjaman = new PeminjamanModel();
        $pengembalian = new PengembalianModel();

        $id = $this->request->getPost('peminjaman_id');

        $pengembalian->insert([
            'peminjaman_id' => $id,
            'tanggal_kembali' => date('Y-m-d'),
            'denda' => 0
        ]);

        $peminjaman->update($id, [
            'status' => 'Dikembalikan',
            'tanggal_kembali' => date('Y-m-d')
        ]);

        return redirect()->to('/pengembalian');
    }
}