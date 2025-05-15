<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class categoriaEvento extends Model
{
    use HasFactory;
    protected $fillable = [
        'artista',
        'genere',
        'squadra_casa',
        'squadra_ospite',
        'tipo_sport',
        'relatore',
        'argomento',
    ];
}
