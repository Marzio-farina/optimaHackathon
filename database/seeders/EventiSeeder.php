<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\evento As Evento;

class EventiSeeder extends Seeder
{
    public function run(): void
    {
        $Eventi= [
            [
                'nome' => 'Concerto Coldplay',
                'localita' => 'Milano',
                'data' => '1985-12-22',
                'ora' => '21:00:00',
            ],
            [
                'nome' => 'Derby Juventus vs Inter',
                'localita' => 'Torino',
                'data' => '2025-09-15',
                'ora' => '20:45:00',
            ],
            [
                'nome' => 'Conferenza AI 2025',
                'localita' => 'Roma',
                'data' => '2025-11-10',
                'ora' => '10:00:00',
            ],
        ];
        foreach ($Eventi as $Evento) {
            Evento::create([
                'nome'=> $Evento['nome'],
                'localita'=> $Evento['localita'],
                'data'=> $Evento['data'],
                'ora'=> $Evento['ora'],
            ]);
        }
    }
}
