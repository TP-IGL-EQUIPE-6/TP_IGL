@extends ('layouts.app')

@section('content')
    <h1>Affichage liste des etudiants avec moyenne</h1>

    @foreach($student as $etudiant)      
        <h3>Matricule : {{$etudiant -> id}} </br>
            Nom : {{$etudiant -> nom}} </br>
            Prénom : {{$etudiant -> prenom}} </br>
            Niveau : {{$etudiant -> niveau}} </br>
            Groupe : {{$etudiant -> grp}}</h3>
        <h4> moyenne générale = {{($etudiant -> moy)}} </h4>
        <hr>       
    @endforeach
    
@endsection


