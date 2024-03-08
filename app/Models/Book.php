<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'penulis',
        'penerbit',
        'deskripsi',
        'tahun_terbit',
        'image',
        'id_kategori',
        'stok'
    ];

    protected $primaryKey = 'id';
    protected $table = 'books';

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'id_buku');
    }
}