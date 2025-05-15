<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\categoriaEvento As Categoria;

class CategorieSeeder extends Seeder
{

    public function run(): void
    {
        $Categorie= [
            [
                'artista' => 'Coldplay',
                'genere' => 'Pop Rock',
                'squadra_casa' => null,
                'squadra_ospite' => null,
                'tipo_sport' => null,
                'relatore' => null,
                'argomento' => null,
            ],
            [
                'artista' => null,
                'genere' => null,
                'squadra_casa' => 'Juventus',
                'squadra_ospite' => 'Inter',
                'tipo_sport' => 'Calcio',
                'relatore' => null,
                'argomento' => null,
            ],
            [
                'artista' => null,
                'genere' => null,
                'squadra_casa' => null,
                'squadra_ospite' => null,
                'tipo_sport' => null,
                'relatore' => 'Dott. Mario Bianchi',
                'argomento' => 'Intelligenza Artificiale e Futuro del Lavoro',
            ],
        ];
        foreach ($Categorie as $Categoria) {
            Categoria::create([
                'artista'=> $Categoria['artista'],
                'genere'=> $Categoria['genere'],
                'squadra_casa'=> $Categoria['squadra_casa'],
                'squadra_ospite'=> $Categoria['squadra_ospite'],
                'tipo_sport'=> $Categoria['tipo_sport'],
                'relatore'=> $Categoria['relatore'],
                'argomento'=> $Categoria['argomento'],
            ]);
        }
    }
}
