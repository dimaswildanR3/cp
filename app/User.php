<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role','ttl','asal','nomer','kampus','jurusan','semester','jeniskelamin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token','password'
    ];

    // public function pengumuman()
    // {
    //     return $this->hasMany('App\Pengumuman');
    // }

    // public function transaksipembayaran()
    // {
    //     return $this->hasMany('App\TransaksiPembayaran');
    // }

    // public function tarik()
    // {
    //     return $this->hasMany('App\Tarik');
    // }

    // public function setor()
    // {
    //     return $this->hasMany('App\Setor');
    // }

    // public function suratmasuk()
    // {
    //     return $this->hasMany('App\Suratmasuk');
    // }

    // public function suratkeluar()
    // {
    //     return $this->hasMany('App\Suratkeluar');
    // }

    // public function disposisis()
    // {
    //     return $this->hasMany('App\Disposisi');
    // }
    // public function anggota()
    // {
    // 	return $this->hasMany(AnggotaPerpus::class);
    // }
}
