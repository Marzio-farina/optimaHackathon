<?php

namespace Database\Seeders;

use App\Models\Meeting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MeetingSeeder extends Seeder
{
    public function run(): void
    {
        $Meetings= [
            [
                'id' => 1,
                'relatore' => 'Dott. Marco Bianchi',
                'argomento' => 'Intelligenza Artificiale e Futuro del Lavoro',
            ],
            [
                'id' => 2,
                'relatore' => 'Prof.ssa Lucia Verdi',
                'argomento' => 'Cambiamenti Climatici e Politiche Ambientali',
            ],
            [
                'id' => 3,
                'relatore' => 'Ing. Giovanni Rossi',
                'argomento' => 'Infrastrutture Sostenibili',
            ],
        ];
        foreach ($Meetings as $Meeting) {
            Meeting::create([
                'id'=> $Meeting['id'],
                'relatore'=> $Meeting['relatore'],
                'argomento'=> $Meeting['argomento'],
            ]);
        }
    }
}
