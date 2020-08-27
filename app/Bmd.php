<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bmd extends Model
{

    Protected $fillable = [
        'kd_barang', 'nm_barang', 'jml', 'ket'
    ];
}
