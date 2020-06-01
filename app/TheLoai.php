<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    //
    protected $table = 'theloai';

    public function sach(){
        return $this->hasMany('App\Sach', 'id_TheLoai', 'id');
    }
}
