<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    protected $table = 'jurusan';
    
    protected $fillable = ['nama', 'publish',];
    public function mentor()
    {
      return $this->hasMany('App\Mentor');
    }
}
