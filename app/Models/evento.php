<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class evento extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'localita',
        'data',
        'ora',
        'posto',
    ];
}
