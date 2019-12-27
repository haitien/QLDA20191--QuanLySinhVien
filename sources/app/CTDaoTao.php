<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CTDaoTao extends Model
{
    protected $table = 'ctdaotao';
    public $timestamps = false;
public function xemCT(){
	////
	////
}
    public function lopsv() {
    	return $this->hasMany('App\LopSV','maCT','maLop');
    }
}
