<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
     //Kolom(field) mana saja yang boleh di isi
     public $fillable = ['nama_genre'];

     //Kolom(field) mana saja yang boleh di perlihatkan
     public $visible = ['nama_genre'];
     public $timestamps = true;

     public function buku()
     {
         //model genre memiliki banyak data dari model buku melalui table (pivot) genre_buku
         //yang diwakili oleh id_genre & id_buku
         return $this->belongsToMany(Buku::class, 'genre_buku', 'id_genre', 'id_buku');
     }
}
