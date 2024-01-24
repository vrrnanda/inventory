<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiHardware extends Model
{
    use HasFactory;

    protected $table='transaksi_hardware';

    protected $fillable = [
        'kodeth', 'namahw', 'namavd', 'merk', 'spesifikasi', 'no_spk', 'tgl_spk', 'no_do', 'tgl_do',
        'no_garansi', 'tgl_garansi', 'tgl_pembelian', 'harga'
    ];
}
