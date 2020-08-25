<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tintuc extends Model
{
    protected $table='tin';
    protected $primaryKey='idTin'; 
    protected $fillable = [
        'idTin',
        'TieuDe',
        'TomTat',
        'urlHinh',
        'Ngay',
        'idUser',
        'Content',
        'idTL',
        'SoLanXem',
        'idLT',
        'TinNoiBat',
        'AnHien',
        'tags' ,  
    ];
    public function TinWithLT(){
        return $this->belongsTo('App\loaitin','idLT','idLT');
    }
    public function TinWithTL(){
        return $this->belongsTo('App\theloai','idTL','idTL');
    }
    public function ykien(){
        return $this->hasMany('App\ykien','idTin','idTin');
    }
    
}
