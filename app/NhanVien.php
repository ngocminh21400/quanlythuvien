<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    //
    protected $table = 'nhanvien';

    public function muonsach(){
        return $this->hasMany('App\MuonSach', 'id_NhanVien', 'id');
    }

    public function trasach(){
        return $this->hasMany('App\TraSach', 'id_NhanVien', 'id');
    }
}
