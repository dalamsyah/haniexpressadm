<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cabang',
        'no_resi',
        'nama_pengirim',
        'alamat_pengirim',
        'no_handphone_pengirim',
        'nama_penerima',
        'alamat_penerima',
        'no_handphone_penerima',
        'cara_pembayaran',
        'nama_pengambil_barang',
        'kota_pengirim',
        'kota_penerima'
    ];
}
