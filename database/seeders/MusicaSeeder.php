<?php

namespace Database\Seeders;

use App\Models\Musica;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MusicaSeeder extends Seeder
{
    public function run(): void
    {
        $Musiche = [
            [
                'id' => '1',
                'artista' => 'Paparazzi',
                'genere' => 'Neomelodico',
            ],
            [
                'id' => '2',
                'artista' => 'Fedez',
                'genere' => 'Rap',
            ],
        ];
        foreach ($Musiche as $Musica) {
            Musica::create([
                'id'=> $Musica['id'],
                'artista'=> $Musica['artista'],
                'genere'=> $Musica['genere'],
            ]);
        }
    }
}
