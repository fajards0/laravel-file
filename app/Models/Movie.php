<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    //Kolom(field) mana saja yang boleh di isi
    public $fillable = ['title', 'description', 'cover_url', 'trailer_url', 'viewer'];

    //Kolom(field) mana saja yang boleh di perlihatkan
    public $visible = ['title', 'description', 'cover_url', 'trailer_url', 'viewer'];
}
