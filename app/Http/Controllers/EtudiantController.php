<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('etudiants.index', compact('etudiants'));
    }

    public function create()
    {
        return view('etudiants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|unique:etudiants,email',
            'age' => 'required|integer|min:1',
        ]);

        Etudiant::create($request->all());
        return redirect()->route('etudiants.index')->with('success', 'Étudiant ajouté avec succès.');
    }

    public function show(Etudiant $etudiant)
    {
        return view('etudiants.show', compact('etudiant'));
    }

    public function edit(Etudiant $etudiant)
    {
        return view('etudiants.edit', compact('etudiant'));
    }

    public function update(Request $request, Etudiant $etudiant)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|unique:etudiants,email,'.$etudiant->id,
            'age' => 'required|integer|min:1',
        ]);

        $etudiant->update($request->all());
        return redirect()->route('etudiants.index')->with('success', 'Étudiant mis à jour avec succès.');
    }

    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return redirect()->route('etudiants.index')->with('success', 'Étudiant supprimé avec succès.');
    }
}