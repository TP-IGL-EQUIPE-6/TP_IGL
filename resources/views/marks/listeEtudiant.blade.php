

@extends ('layouts.app')
@section('content')
    <h1> Liste des Etudiants </h1>
    <ul>
        @foreach ($etudiants as $etudiants)
        <li>
            <h3> {{$etudiants -> nom}} {{$etudiants -> prenom}}</h3>
            <hr>
        </li>

        @endforeach
    </ul>
@endsection
