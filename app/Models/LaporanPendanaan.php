<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanPendanaan extends Model
{
    use HasFactory;
    protected $table = "laporan_pendanaan";
    protected $fillable = ["daftar_ads", "tanggal_cek_saldo", "jam_cek_saldo", "jumlah_saldo", "tanggal_topup", "jam_topup", "jumlah_topup", "jumlah_setelah_topup", "status_iklan", "keterangan"];
}
