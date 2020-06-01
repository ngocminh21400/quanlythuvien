<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietTraSach extends Model
{
    //
    protected $table = 'chitiettrasach';

    public function sach(){
        return $this->hasMany('App\Sach', 'id_Sach', 'id');
    }

    public function trasach(){
        return $this->belongsTo('App\TraSach', 'id_TraSach', 'id');
    }
}
