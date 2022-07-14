<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiDetail extends Model
{
    protected $table = "transaksi_detail";
    protected $primaryKey = "id_transaksi_detail";
    protected $fillable = ['id_transaksi_detail','transaksi_id','produk_id', 'harga_satuan', 'jumlah'];
    public $timestamps = true;
    use HasFactory;

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'transaksi_id','id_transaksi');
    }

    public function produk()
    {
        return $this->belongsTo(produk::class, 'produk_id','id_produk');
    }
}
