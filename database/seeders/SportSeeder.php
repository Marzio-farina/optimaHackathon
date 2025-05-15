<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\sport As Sport;

class SportSeeder extends Seeder
{
    public function run(): void
    {
        $Sports= [
            [
                'id' => '1',
                'casa' => 'Juventus',
                'ospite' => 'Inter',
                'tipo' => 'Serie A',
            ],
            [
                'id' => '2',
                'casa' => 'Milan',
                'ospite' => 'Napoli',
                'tipo' => 'Serie A',
            ],
        ];
        foreach ($Sports as $Sport) {
            Sport::create([
                'id'=> $Sport['id'],
                'casa'=> $Sport['casa'],
                'ospite'=> $Sport['ospite'],
                'tipo'=> $Sport['tipo'],
            ]);
        }
    }
}