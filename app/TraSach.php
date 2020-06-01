<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TraSach extends Model
{
    //
    protected $table = 'trasach';

    public function users(){
        return $this->belongsTo('App\Users', 'id_user', 'id');
    }

    public function nhanvien(){
        return $this->belongsTo('App\NhanVien', 'id_NhanVien', 'id');
    }

    public function chitiettrasach(){
        return $this->hasMany('App\ChiTietTraSach', 'id_TraSach', 'id');
    }
}
