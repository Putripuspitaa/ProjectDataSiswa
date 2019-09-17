<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $fillable = [
        'id',
        'nip',
        'nama_guru',
        'tanggal_lahir',
        'jenis_kelamin',
        'avatar'
    ];
    
}
