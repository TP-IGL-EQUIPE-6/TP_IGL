<style type="text/css">
    .bodyZone {
  height:  100vh; 
  width:  100vw; 
}
.h4Zone {
  font-size:  30px; 
  font-weight:  600; 
  color:rgb(199, 53, 27); 
  opacity:  .85; 
  margin-top: 0px;
  margin-left: 100px;
}

form {
  padding:  40px 30px; 
  background:  #fefefe; 
  display:  flex; 
  flex-direction:  column;
  align-items:  flex-start; 
  padding-bottom:  20px; 
  width:  500px; }

  
  .pZone {
     margin-left:100px;
     margin-top: 2px;
    text-align: center;
    font-size:  20px; 
    color:  #000; 
    opacity:  .65;
    font-weight:  400; 
    max-width:  250px; 
   }

a.discrete {
    color:  rgba(#000, .4); 
    font-size:  14px; 
    border-bottom:  solid 1px rgba(#000, .0);
    padding-bottom:  4px;  
    margin-left:  auto; 
    font-weight:  300; 
    transition:  all .3s ease; 
    margin-top:  40px; }
    :hover {
      border-bottom:  solid 1px rgba(#000, .2);
    }
  
.buttonZone {
  -webkit-appearance:  none; 
  width:  auto;
  min-width:  100px;
  border-radius:  24px; 
  text-align:  center; 
  padding:  15px 40px;
  margin-top:  50px; 
  background-color:  saturate( rgb(182,157,230), 30%); 
  color:ffff;
  font-size:  14px;
  margin-left:  200px; 
  margin-bottom: 20px;
  font-weight:  500; 
  box-shadow:  0px 2px 6px -1px rgba(0,0,0,.13); 
  border:  none;
  transition:  all .3s ease; 
  outline: 0; }

  .buttonZone:hover {
    transform:  translateY(-3px);
    background-color: rgb(199, 53, 27);
    box-shadow:  0 2px 6px -1px rgba( rgb(182,157,230), .65);}
    :active {
      transform:  scale(.99);
    }
    :hover {
        transform:  translateY(-3px);
        
        box-shadow:  0 2px 6px -1px rgba( rgb(182,157,230), .65);}
        :active {
          transform:  scale(.99);
        }
   

.labelZone{
  margin-left: 50px;
}
  .inputZone {
    font-size:  16px; 
  padding:  20px 0px; 
  margin-left: 50px;
  height:  20px; 
  border:  none; 
  border-bottom:  solid 1px rgba(0,0,0,.1); 
  background:  #fff; 
  width:  200px; 
  box-sizing:  border-box; 
  transition:  all .3s linear; 
  color:  #000; 
  font-weight:  400;
  -webkit-appearance:  none; }
  
  .selectZone{
    margin-top:10px;
    width:  200px;
    margin-left: 150px;
    display:  flex; 

  }
  .icon {
    position:  absolute; 
    top:  0; 
    left:  0; 
    height:  56px; 
    width:  44px; 
    display:  flex; }

.session {
  display:  flex; 
  flex-direction:  row; 
  width:  900px; 
  height: 600px; 
  margin:  auto auto; 
  background:  #ffffff; 
  border-radius:  4px; 
  box-shadow:  0px 2px 6px -1px rgba(0,0,0,.12);
}
.left {
  width:  300px; 
  height:  500px; 
  min-height:  100%; 
  position:  relative; 
  background-image: url(/TP_IGL/resources/views/marks/bg.PNG);
  background-repeat: no-repeat;
  background-size:cover;
  
  border-top-left-radius:  4px; 
  border-bottom-left-radius:  4px;
}
.perr{
   margin-top: 0px;
  margin-bottom: 0px;
  
  }
  .err{
  margin-left: 100px;
  color: red;
  margin-bottom: 2px;
  }
</style>


@extends ('layouts.app')
@section('content')

<title>Créer un compte étudiant</title>

<body class="BodyZone">
    <script src="/TP_IGL/resources/js/vue.js"></script>
    <div class="session">
        <div class="left"> </div>

        <div class='max-w-3xl mx-auto'>
        <div class='my-10'>
         <form action="{{route('Etudiant.store')}}" method="POST" class='w-4/5'>
         {{csrf_field()}}
            <h4 class="h4Zone">Gestion de <span>Scolarité</span></h4>
                  <p class="pZone">Introduisez ces informations pour ajouter un etudiant</p>

             <div class="py-3">
                <label  class="labelZone">Nom   :     </label>
                <input  class="inputZone" type="text" name="nom" id="nom" class='bg-form'>
            </div>
            <div class="py-3">
                <label class="labelZone">Prénnom:</label>
                <input class="inputZone" type="text" name="prenom" id="prenom" class='bg-form'>
            </div>
            <div class="py-3">
                <label class="labelZone">Matricule:</label>
                <input  class="inputZone" type="text" name="id" id="matricule" class='bg-form'>
            </div>
            <div>
                <label class="labelZone">Niveau:</label>
                <select class="selectZone" name="niveau" id="niveau">  
                    <option value="1CP">1CP</option>
                    <option value="2CP">2CP</option>
                    <option value="1CP">1CS</option>
                    <option value="2CP">2CS</option>
                    <option value="3CP">3CS</option>
                </select>
            </div>
            <div>
                <label class="labelZone">Section:</label>
                <select class="selectZone" name="section" id="section">  
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>
            </div>
            <div>
                <label class="labelZone">Groupe:</label>
                <select class="selectZone" name="grp" id="grp">  
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
                <button  class="buttonZone" type="submit">
                    Enregistrer
                </button>
            </div>
        
         </form>
        </div>
        </div>
    </div>
</body>
@endsection
<script>
const app = new Vue({
  el:'#app',
  data:{
    errors:[],
    nom:null,
    prenom:null,
    matricule:null,
    niveau:null,
    grp:null,
    
  },
  methods:{
    checkForm:function(e) {
      if(this.nom && this.prenom && this.matricule && this.niveau && this.grp) return true;
      this.errors = [];
      if(!this.niveau) this.errors.push("Niveau required");
      if(!this.grp) this.errors.push("group required");
      if(!this.nom) this.errors.push("nom required");
      if(!this.prenom) this.errors.push("prenom required");
      if(!this.matricule) this.errors.push("matricule required");
      e.preventDefault();
    }
  }
})
</script>
