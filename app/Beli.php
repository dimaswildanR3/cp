<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beli extends Model
{
    protected $table = 'beli';
    
    protected $fillable = ['user','paket','harga'];

}
