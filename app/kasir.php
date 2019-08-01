<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kasir extends Model
{
    protected $fillable = ['nama','almaat','telepon','status','username','password','akses'];
public $timestamps = 'true';

public function penjualan() {
return $this->hasmany ('App\penjualan','id_kasir');
}
}
