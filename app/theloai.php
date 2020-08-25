<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
    protected $table='theloai';
    protected $primaryKey='idTL';
    protected $fillable = [
        'idTL',
        'TenTL',
        'ThuTu',
        'AnHien',
        'lang',
        'HienMenu'       
    ];
    public function loaitin(){
        return $this->hasMany('App\loaitin','idTL','idTL');
    }
}
