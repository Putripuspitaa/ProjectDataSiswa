<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Walikelas extends Model
{
    protected $table = 'walikelas';
    
    protected $fillable=
    [
        'id',
        'id_guru',
        'id_kelas'
    ];

    public function kelas(){
        return $this->belongsTo('App\Kelas','id_kelas');
    }
     public function guru(){
        return $this->belongsTo('App\Guru','id_guru');
    }
}