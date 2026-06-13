<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    // 1. Sesuaikan nama tabel di database
    protected $table = 'artikel';

    // 2. MATIKAN TIMESTAMPS (Kunci penyembuh error updated_at pada artikel!)
    public $timestamps = false;

    // 3. Daftarkan kolom mass-assignment sesuai form input
    protected $fillable = [
        'id_penulis',
        'id_kategori',
        'judul',
        'isi',
        'gambar',
        'hari_tanggal',
    ];

    // 4. Relasi balik ke Penulis
    public function penulis()
    {
        return $this->belongsTo(Penulis::class, 'id_penulis');
    }

    // 5. Relasi balik ke Kategori
    public function kategori()
    {
        return $this->belongsTo(KategoriArtikel::class, 'id_kategori');
    }
}