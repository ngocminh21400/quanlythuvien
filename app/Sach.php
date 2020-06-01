<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sach extends Model
{
    //
    protected $table = 'sach';

    public function chitiettrasach(){
        return $this->hasMany('App\ChiTietTraSach', 'id_sach', 'id');
    }

    public function chitietmuonsach(){
        return $this->hasMany('App\ChiTietMuonSach', 'id_sach', 'id');
    }

    public function theloai(){
        return $this->belongsTo('App\TheLoai', 'id_TheLoai', 'id');
    }
}
