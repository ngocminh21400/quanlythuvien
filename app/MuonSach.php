<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MuonSach extends Model
{
    //
    protected $table = 'muonsach';

    public function users(){
        return $this->belongsTo('App\Users', 'id_user', 'id');
    }

    public function nhanvien(){
        return $this->belongsTo('App\NhanUien', 'id_nhanvien', 'id');
    }

    public function chitietmuonsach(){
        return $this->hasMany('App\ChiTietMuonSach', 'id_muonsach', 'id');
    }
}
