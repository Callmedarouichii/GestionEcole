@extends('layout')
@section('content')
<div class="container">
    <h1>Supprimer un élève</h1>
    <form method="POST" action="{{ route('eleves.destroy', $eleve->id) }}">
        @csrf
        @method('DELETE')
        <p>Voulez-vous vraiment supprimer l'élève "{{ $eleve->nom }} {{ $eleve->prenom }}"?</p>
        <button type="submit" class="btn btn-danger">Supprimer</button>
        <a href="{{ route('eleves.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>

@endsection