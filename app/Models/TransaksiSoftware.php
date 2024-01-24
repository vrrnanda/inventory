<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiSoftware extends Model
{
    use HasFactory;

    protected $table='transaksi_software';

    protected $fillable = [
        'kodets', 'namasw', 'namavd', 'merk', 'spesifikasi', 'no_spk', 'tgl_spk', 'no_do', 'tgl_do',
        'no_garansi', 'tgl_garansi', 'tgl_pembelian', 'harga'
    ];
}
