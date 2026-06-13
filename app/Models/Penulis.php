<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Penulis extends Authenticatable
{
    protected $table = 'penulis';

    // WAJIB ADA BARIS INI: Untuk mematikan pencarian kolom created_at & updated_at oleh Laravel
    public $timestamps = false;

    protected $fillable = [
        'nama_depan',
        'nama_belakang',
        'user_name',
        'password',
        'foto',
    ];

    protected $hidden = [
        'password',
    ];

    public function artikel()
    {
        return $this->hasMany(Artikel::class, 'id_penulis');
    }
}