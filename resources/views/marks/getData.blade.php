<style type="text/css">
	table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
}
th, td {
  padding: 15px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
tr:hover {background-color: #f5f5f5;}

th {
  background-color: #4CAF50;
  color: white;
}
</style>


@extends ('layouts.app')

@section('content')
    <h1>Affichage liste des etudiants avec moyenne</h1>

    @foreach($student as $etudiant)      
        <h3>Matricule : {{$etudiant -> id}} </br>
            Nom : {{$etudiant -> nom}} </br>
            Prénom : {{$etudiant -> prenom}} </br>
            Niveau : {{$etudiant -> niveau}} </br>
            Groupe : {{$etudiant -> grp}}</h3>
        <h4> moyenne générale = {{($etudiant -> moyenne)}} </h4>
        <hr>       
    @endforeach
    
@endsection


