<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    //Kolom(field) mana saja yang boleh di isi
    public $fillable = ['judul', 'foto', 'kategori', 'konten', 'penulis'];

    //Kolom(field) mana saja yang boleh di perlihatkan
    public $visible = ['judul', 'foto', 'kategori', 'konten', 'penulis'];

}
