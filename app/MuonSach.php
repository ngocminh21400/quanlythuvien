<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MuonSach extends Model
{
    //
    protected $table = 'muonsach';

    public function users(){
        return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function chitietmuonsach(){
        return $this->hasMany('App\ChiTietMuonSach', 'id_MuonSach', 'id');
    }
}
