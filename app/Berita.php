<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
        protected $table = 'berita';
        protected $fillable = [
        'id','judul', 'subjudul', 'isi', 'foto'
    ];
    public function ambilFoto()
    {
    	return asset('images/'.$this->foto);
    }
}
