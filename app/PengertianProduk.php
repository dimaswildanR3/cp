<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengertianProduk extends Model
{
    protected $table = 'pengetian_prduk';
    
    protected $fillable = ['judul', 'isi','publish', 'foto', 'ket','id_produk '];
    
    public function produk()
    {
        return $this->belongsTo('App\Produk','id_produk' );
    }
}