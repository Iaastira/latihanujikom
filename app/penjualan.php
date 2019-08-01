<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    protected $fillable = ['id_buku','id_kasir','jumlah','total','tanggal'];
public $timestamps = 'true';

public function kasir() {
return $this->belongsTo ('App\kasir','id_pasok');
}
}
