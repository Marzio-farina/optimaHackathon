<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\biglietto As Biglietto;

class BigliettoSeeder extends Seeder
{
    public function run(): void
    {
        $Biglietti= [
            [
                'evento_id' => 1,
                'utente_id' => 1,
                'prezzo' => 25.00,
                'settore' => 'A',
                'fila' => '1',
                'numero' => 10,
            ],
            [
                'evento_id' => 3,
                'utente_id' => 2,
                'prezzo' => 30.00,
                'settore' => 'B',
                'fila' => '2',
                'numero' => 5,
            ],
            [
                'evento_id' => 2,
                'utente_id' => 1,
                'prezzo' => 40.00,
                'settore' => 'VIP',
                'fila' => '1',
                'numero' => 1,
            ]
        ];
        foreach ($Biglietti as $Biglietto) {
            Biglietto::create([
                'evento_id'=> $Biglietto['evento_id'],
                'utente_id'=> $Biglietto['utente_id'],
                'prezzo'=> $Biglietto['prezzo'],
                'settore'=> $Biglietto['settore'],
                'fila'=> $Biglietto['fila'],
                'numero'=> $Biglietto['numero'],
            ]);
        }
    }
}
