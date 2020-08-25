<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ykien extends Model
{
    protected $table='ykien';
    protected $primaryKey='idYKien'; 
    protected $fillable = [
        'idYKien',
        'idTin',
        'Ngay',
        'NoiDung',
        'HoTen',
        'Email',
        'AnHien',
    ];
    public function TinWithYkien(){
        return $this->belongsTo('App\tintuc','idTin','idTin');
    }
}
