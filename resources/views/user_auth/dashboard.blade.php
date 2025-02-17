@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
    <h1>Mon compte</h1>
    <form action="#" method="POST" class="d-flex flex-column justify-content-between align-items-center">
        <div class="custom-file">
            <input type="file" id="customFile">
            <label class="file flex center_colonne center_row" for="customFile">Envoyer un fichier</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" name="rgpd" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Votre adresse de messagerie est uniquement utilisée pour vous envoyer les lettres d'information de la CNIL.
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
@endsection
