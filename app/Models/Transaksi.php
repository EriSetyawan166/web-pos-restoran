<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksi";
    protected $primaryKey = "id_transaksi";
    protected $fillable = ['id_transaksi','total_item', 'total_harga', 'id_kasir'];
    public $timestamps = true;
    public $incrementing = false;
    use HasFactory;

    public function transaksidetail()
    {
        return $this->hasMany(TransaksiDetail::class,'transaksi_id','id_transaksi');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_kasir','nip');
    }
}
