<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategori";
    protected $primaryKey = "id_kategori";
    protected $fillable = ['id_kategori','nama_kategori', 'foto_kategori'];
    public $incrementing = false;
    public $timestamps = true;
    use HasFactory;

    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
