<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class buku extends Model
{
    protected $fillable = ['judul','noisbn','penulis','penerbit','tahun','stok','harga_pokok',
                            'harga_jual','ppn','diskon'];
    public $timestamps = 'true';

    public function pasok() {
        return $this->hasmany ('App\pasok','id_buku');
    }
    public function penjualan () {
        return $this->hasmany ('App\penjualan','id_buku');
    }
}
