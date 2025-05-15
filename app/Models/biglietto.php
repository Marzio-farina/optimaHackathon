<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class biglietto extends Model
{
    use HasFactory;

    protected $fillable = [
        'prezzo',
        'settore',
        'fila',
        'numero',
    ];
}
