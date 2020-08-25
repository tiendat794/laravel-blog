<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaitin extends Model
{
    protected $table='loaitin';
    protected $primaryKey='idLT';
    protected $fillable = [
        'idLT',
        'Ten',
        'ThuTu',
        'AnHien',
        'idTL',
        'lang',
        'HienMenu'       
    ];

    public function theloai(){
        return $this->belongsTo('App\theloai','idTL','idTL');
    }
    public function tintuc(){
        return $this->hasMany('App\tintuc','idLT','idLT');
    }
}
