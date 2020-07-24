<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietMuonSach extends Model
{
    //
    protected $table = 'chitietmuonsach';

    public function sach(){
        return $this->belongsTo('App\Sach', 'id_Sach', 'id');
    }

    public function muonsach(){
        return $this->belongsTo('App\MuonSach', 'id_MuonSach', 'id');
    }
}
