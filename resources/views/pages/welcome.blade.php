<style>
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
  background-image: url(/TP_IGL/resources/views/marks/bg.PNG);
  background-repeat: no-repeat;
  background-size:cover;
  
  border-top-left-radius:  4px; 
  border-bottom-left-radius:  4px;

}

</style>

@extends('layouts.app')
@section('content')
<body class="BodyZone">
    <script src="/TP_IGL/resources/js/vue.js"></script>
    <div class="session">
        <div class="left"> </div>
        <h4 class="h4Zone">Gestion de Scolarité</h4>
        <p class ="pZone"></p>
        
    </div>
    
</body>

@endsection