<style type="text/css">
    table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
  width:900px;
  margin_left:235px;
}
th, td {
  padding: 15px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
tr:hover {background-color: #f5f5f5;}

th {
  background-color:rgb(199, 53, 27);
  color: white;
}
h1{
  margin_left:300px;
}

</style>


@extends ('layouts.app')

@section('content')
    <h1>Affichage liste des etudiants avec moyenne</h1>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Matricule</th>
                <th>nom</th>
                <th>prenom</th>
                <th>niveau</th>
                <th>groupe</th>
                <th>moyenne generale</th>
            </tr>
        </thead>
        <tbody>
    @foreach($student as $etudiant)      
        <tr>
         <td> {{$etudiant -> id}} </td>
           <td>{{$etudiant -> nom}} </td>
            <td> {{$etudiant -> prenom}} </td>
            <td> {{$etudiant -> niveau}} </td>
            <td> {{$etudiant -> grp}}</td>
        <td>  {{($etudiant -> moyenne)}} </td>
        </tr>       
    @endforeach
    </tbody>
@endsection


