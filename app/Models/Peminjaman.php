<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_user',
        'id_buku',
        'tgl_pinjam',
        'tgl_kembali',
        'status',
        'jumlah',
    ];
    protected $table = 'peminjaman';

    public function user() 
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function book() 
    {
        return $this->belongsTo(Book::class, 'id_buku');
    }
    
}