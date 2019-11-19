@extends ('layouts.app')

@section('content')
    <h1>Form</h1>
    <form action="{{ url('etudiant') }}" method="POST">
        {{ csrf_field() }}
        <label for="level">Entrez le niveau : </label>
        <input type="text" name="level" id="level">
        </br></br>
        <label for="grp">Choisisser le numero du groupe : </label>
        <input type="text" name="grp" id="grp">
        </br></br>
        <input type="submit" value="Envoyer !">
    </form>

@endsection