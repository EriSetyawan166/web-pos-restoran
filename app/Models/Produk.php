<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "produk";
    protected $primaryKey = "id_produk";
    protected $fillable = ['id_produk','nama_produk', 'kode_produk', 'harga', 'status', 'kategori_id', 'foto_produk'];
    use HasFactory;

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id','id_kategori');
    }

    public function transaksidetail()
    {
        return $this->hasMany(TransaksiDetail::class);
    }
}
