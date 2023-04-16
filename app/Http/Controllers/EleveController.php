<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleve;

class EleveController extends Controller
{
    public function index()
    {
        $eleves = Eleve::all();
        return view('eleves.index', compact('eleves'));
    }

    public function create()
    {
        return view('eleves.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'date_naissance' => 'required|date',
            'adresse' => 'required|max:255',
            'telephone' => 'required|max:20',
            'email' => 'required|email|max:255|unique:eleves',
        ]);

        Eleve::create($validatedData);

        return redirect()->route('eleves.index')
            ->with('success', 'Eleve created successfully.');
    }

    public function show(Eleve $eleve)
    {
        return view('eleves.show', compact('eleve'));
    }

    public function edit(Eleve $eleve)
    {
        return view('eleves.edit', compact('eleve'));
    }

    public function update(Request $request, Eleve $eleve)
    {
        $validatedData = $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'date_naissance' => 'required|date',
            'adresse' => 'required|max:255',
            'telephone' => 'required|max:20',
            'email' => 'required|email|max:255|unique:eleves,email,'.$eleve->id,
        ]);

        $eleve->update($validatedData);

        return redirect()->route('eleves.index')
            ->with('success', 'Eleve updated successfully');
    }

    public function destroy(Eleve $eleve)
    {
        $eleve->delete();

        return redirect()->route('eleves.index')
            ->with('success', 'Eleve deleted successfully');
    }
}
