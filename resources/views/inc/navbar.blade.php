<style type="text/css">
nav{
    width: 900;
    margin-left: 277px;
}
 .ulNav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

.linav {
  float: left;
}

.linav a {
  display: block;
  color: white;
  text-align: center;
  padding: 20px 50px;
  text-decoration: none;
  font-size: 20;
  font-family: Helvetica;
}

/* Change the link color to #111 (black) on hover */
.linav a:hover {
  background-color:  rgb(199, 53, 27);;
}
.active {
  background-color: #4CAF50;
}
.inputNav{

  color: black;
  text-align: center;
  padding: 20px 50px;
  text-decoration: none;
  margin-left: 278px;

}
.buttonNav{
   color: black;
  text-align: center;
  padding: 20px 40px;
  text-decoration: none;

}
.buttonNav.hover{
  background-color: tomato;
}
</style>

<nav >      
    <div id="navbarsExampleDefault">
    <ul class="ulNav">
        <li class="linav"><a href="{{route('peges.welcome')}}">Home</a></li>
        <li class="linav"><a href="{{route('marks.create')}}">Affichage des moyennes</a></li>
        <li class="linav"><a href="{{route('Etudiant.create')}}">Ajouter étudiant</a></li>
        <li class="linav"><a href="{{route('peges.about')}}">About</a></li>
    </ul> 
</div>
</nav>
      

