@extends('layout')
@section('content')

<div class="container">
    <h1>Ajouter un élève</h1>
    <form method="POST" action="{{ route('eleves.store') }}">
        @csrf
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom:</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>
        <div class="form-group">
            <label for="date_naissance">Date de naissance:</label>
            <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>

@endsection