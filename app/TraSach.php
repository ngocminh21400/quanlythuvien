<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TraSach extends Model
{
    //
    protected $table = 'trasach';

    public function users(){
        return $this->belongsTo('App\User', 'id_user', 'id');
    }
    
    public function chitiettrasach(){
        return $this->hasMany('App\ChiTietTraSach', 'id_TraSach', 'id');
    }
}
