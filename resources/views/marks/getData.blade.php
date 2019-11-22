@extends ('layouts.app')

@section('content')
    <h1>Affichage liste des etudiants avec moyenne</h1>
<<<<<<< HEAD

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


=======
    <table id="example" class="display" style="width:100%">
    <thead>
            <tr>
                <th>Matricule</th>
                <th>nom</th>
                <th>prenom</th>
                <th>niveau</th>
                <th>groupe</th>
                <th>moyenne générale</th>
            </tr>
        </thead>
        <tbody>
                @foreach($student as $etudiant)
                <tr>
                <td>{{$etudiant -> id}}</td>
                <td>{{$etudiant -> nom}}</td>
                <td>{{$etudiant -> prenom}}</td>
                <td>{{$etudiant -> niveau}}</td>
                <td>{{$etudiant -> grp}}</td>
                
                 </tr>
                @endforeach
         </tbody>
</table>
@endsection



>>>>>>> sauvegarde de modif
