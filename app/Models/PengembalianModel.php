<?php

namespace App\Models;

use CodeIgniter\Model;

class PengembalianModel extends Model
{
    protected $table = 'pengembalian';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'peminjaman_id',
        'tanggal_kembali',
        'denda'
    ];
}