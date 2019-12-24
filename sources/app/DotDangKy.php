<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DotDangKy extends Model
{
    protected $table = 'dotdangky';
    public $timestamps = false;
    protected $primaryKey = 'maDot';
    public $chophep = true;

    public function chophep() {
    	return $this->chophep;
    }

    public function modk() {
    	return 
    }
}
