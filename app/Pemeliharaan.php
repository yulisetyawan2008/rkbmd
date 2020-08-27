<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemeliharaan extends Model
{
    protected $guarded = [];

    public function program(){
        return $this->belongsTo('App\Program');
    }

    public function kegiatan(){
        return $this->belongsTo('App\Kegiatan');
    }

    public function output(){
        return $this->belongsTo('App\Output');
    }

    public function bmd(){
        return $this->belongsTo('App\Bmd');
    }
}
