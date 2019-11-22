@extends ('layouts.app')

@section('content')
    <h1>Form</h1>
    <form action="{{url('/note/getData')}}" method="get">
        {{csrf_field()}}
        <label for="niveau">Niveau:</label> 
        <select name="niveau" id="niveau"> 
            <option value="1cp">1CP</option>
            <option value="2cp">2CP</option>
            <option value="1cs">1CS</option>
            <option value="2cs">2CS</option>
            <option value="3cs">3CS</option>
        </select>
        </br> </br>
        <label for="grp">Groupe : </label>
        <input placeholder="grp" type="number" max="9" min="1" name="grp" id="grp" autocomplete="off" ></br></br>      
        <input type="submit" value="Envoyer !">
    </form>
@endsection