<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietMuonSach extends Model
{
    //
    protected $table = 'chitietmuonsach';

    public function sach(){
        return $this->hasMany('App\Sach', 'id_Sach', 'id');
    }

    public function muonsach(){
        return $this->belogsTo('App\MuonSach', 'id_MuonSach', 'id');
    }
}
