<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategori";
    protected $primaryKey = "id_kategori";
    protected $fillable = ['id_kategori','nama_kategori'];
    public $incrementing = false;
    public $timestamps = true;
    use HasFactory;
}
