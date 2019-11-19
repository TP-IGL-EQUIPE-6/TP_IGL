@extends ('layouts.app')

@section('content')
    <h1>Formulaire de choix de niveau et groupe</h1>
    @if(count($etud)>1)
        @foreach($etud as $etudiant)
            <h3>{{$etudiant->nom}}</h3>
        @endforeach
    @else 
        <p> no student found </p>
    @endif
    <h3>Affichage des moyennes</h3> 
@endsection