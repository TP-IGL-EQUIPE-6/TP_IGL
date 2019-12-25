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
  margin-left: 100px;
}

form {
  padding:  40px 30px; 
  background:  #fefefe; 
  display:  flex; 
  flex-direction:  column;
  align-items:  flex-start; 
  padding-bottom:  20px; 
  width:  400px; }

  
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
  margin-top:  5px; 
  background-color:  saturate( rgb(182,157,230), 30%); 
  color:ffff;
  font-size:  14px;
  margin-left:  auto; 
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
  margin-left: 100px;
}
  .inputZone {
    font-size:  16px; 
  padding:  20px 0px; 
  margin-left: 150px;
  height:  56px; 
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
  height: 500px; 
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
  background-image: url(./bg.PNG );
  background-repeat: no-repeat;
  background-size:cover;
  
  border-top-left-radius:  4px; 
  border-bottom-left-radius:  4px;
}
</style>

@extends ('layouts.app')

@section('content')
<body class="BodyZone">
    <div class="session">
        <div class="left"> </div>
        <form action="{{url('/marks/getData')}}" method="get">
            {{csrf_field()}}
            <h4 class="h4Zone">Gestion de <span>Scolarité</span></h4>
            <p class="pZone">Introduisez ces informations avant de lancer la recherche d'un goupe</p>    
            <label class="labelZone" for="niveau">Niveau:</label> 
            <select class="selectZone" name="niveau" id="niveau"> 
                <option value="1cp">1CP</option>
                <option value="2cp">2CP</option>
                <option value="1cs">1CS</option>
                <option value="2cs">2CS</option>
                <option value="3cs">3CS</option>
            </select>
            </br> </br>
            <label class="labelZone" for="grp">Groupe : </label>
            <input class="inputZone" placeholder="grp" type="number" max="9" min="1" name="grp" id="grp" autocomplete="off" ></br></br>
            <input class="buttonZone"  type="submit" value="Recherche" >      
        </form>
    </div>
</body>
@endsection
