<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{

    protected $table = 'mentor';
    
    protected $guarded = [];
    
    public function jurusan()
    {
        return $this->belongsTo('App\jurusan','id_jurusan' );
    }
}
