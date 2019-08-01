<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class distributor extends Model
{
    protected $fillable = ['nama_distributor','noisbn'];
public $timestamps = 'true';

public function pasok() {
return $this->hasmany ('App\pasok','id_distributor');
}
}
