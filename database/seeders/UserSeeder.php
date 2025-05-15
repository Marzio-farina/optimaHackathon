<?php

namespace Database\Seeders;

use App\Models\Utente;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Users= [
            [
                'nome' => 'Mario',
                'cognome' => 'Rossi',
                'data_nascita' => '1990-05-10',
                'email' => 'mario.rossi@example.com',
                'cf' => 'RSSMRA90E10H501U',
                'genere' => 'M',
                'password' => Hash::make('password123'),
            ],
            [
                'nome' => 'Laura',
                'cognome' => 'Bianchi',
                'data_nascita' => '1985-12-22',
                'email' => 'laura.bianchi@example.com',
                'cf' => 'BNCLRA85T62H501Q',
                'genere' => 'F',
                'password' => Hash::make('password123'),
            ],
            [
                'nome' => 'Giulia',
                'cognome' => 'Verdi',
                'data_nascita' => '2000-03-15',
                'email' => 'giulia.verdi@example.com',
                'cf' => 'VRDGLI00C55H501C',
                'genere' => 'F',
                'password' => Hash::make('password123'),
            ] 
        ];
        foreach ($Users as $Utente) {
            Utente::create([
                'nome'=> $Utente['nome'],
                'cognome'=> $Utente['cognome'],
                'data_nascita'=> $Utente['data_nascita'],
                'email'=> $Utente['email'],
                'cf'=> $Utente['cf'],
                'genere'=> $Utente['genere'],
                'password'=> $Utente['password'],
            ]);
        }
    }
}
