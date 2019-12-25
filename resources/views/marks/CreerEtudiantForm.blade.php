@extends ('layouts.app')

@section('content')
    
<title>Créer un compte étudiant</title>

<div class='max-w-3xl mx-auto'>
<div class='my-10'>
    <form action="{{route('Etudiant.store')}}" method="POST" class='w-4/5'>

        {{csrf_field()}}

        <div class="py-3">
            <input type="text" name="nom" id="nom" class='bg-form'>
        </div>
        <div class="py-3">
            <input type="text" name="prenom" id="prenom" class='bg-form'>
        </div>
        <div class="py-3">
            <input type="text" name="matricule" id="matricule" class='bg-form'>
        </div>
        <div class="py-3">
            <input type="email" name="email" id="email" class='bg-form'>
        </div>
        <div class="py-3">
            <input type="password" name="pwd" id="pwd">
        </div>
        <div>
            <select name="niveau" id="niveau">  
                <option value="1CP">1CP</option>
                <option value="2CP">2CP</option>
                <option value="1CP">1CS</option>
                <option value="2CP">2CS</option>
                <option value="3CP">3CS</option>
            </select>
        </div>
        <div>
            <select name="section" id="section">  
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select>
        </div>
        <div>
            <select name="grp" id="grp">  
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
        <div>
            <button type="submit">
                Enregistrer
            </button>
        </div>
        
    </form>
</div>
</div>
</body>
@endsection

