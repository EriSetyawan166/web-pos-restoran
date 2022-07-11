<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "produk";
    protected $primaryKey = "id_produk";
    protected $fillable = ['id_produk','nama_produk', 'kode_produk', 'harga', 'stok', 'id_kategori'];
    use HasFactory;
}
