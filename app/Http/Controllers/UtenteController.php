<?php

namespace App\Http\Controllers;

use App\Models\Utente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UtenteController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'cognome' => 'required|string|max:255',
            'dataNascita' => 'required|date',
            'email' => 'required|email|unique:utentes,email',
            'cf' => 'required|string|size:16|unique:utentes,cf',
            'sesso' => 'nullable|in:M,F,N',
            'password' => 'required|confirmed|min:6',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        Utente::create([
            'nome' => $validated['nome'],
            'cognome' => $validated['cognome'],
            'data_nascita' => $validated['dataNascita'],
            'email' => $validated['email'],
            'cf' => $validated['cf'],
            'genere' => $validated['sesso'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect('/')->with('success', 'Registrazione completata!');
    }
}
