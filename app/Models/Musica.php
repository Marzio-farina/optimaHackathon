<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Musica extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'artista',
        'genere',
    ];
}
