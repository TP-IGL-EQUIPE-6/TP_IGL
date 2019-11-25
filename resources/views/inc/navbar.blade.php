<style>
nav{
    width: 900;
    margin-left: 235px;
}
 .ulNav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 20px 50px;
  text-decoration: none;
  font-size: 20;
  font-family: Helvetica;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
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
<<<<<<< HEAD
<a href="#">{{config('app.name', 'Scolarité')}}</a>
    <button type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
    </button>
  
    <div id="navbarsExampleDefault">
      <ul>
=======

    
  
    <div id="navbarsExampleDefault">
      <ul class="ulNav">
>>>>>>> sauvegarde de modif
        <li><a href="/TP_IGL/public/">Home</a></li>
        <li><a href="/TP_IGL/public/about">About</a></li>
        <li><a href="/TP_IGL/public/AfficherPlanning">AfficherPlanning</a></li>
        <li><a href="/TP_IGL/public/note/create">Affichage des moyennes</a></li>
<<<<<<< HEAD
      </ul> 
        <!--
        <li >
          <a href="" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        <li >
          <a href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div aria-labelledby="dropdown01">
            <a href="#">Action</a>
            <a href="#">Another action</a>
            <a href="#">Something else here</a>
          </div>
        </li>
      
    -->

  <form>
    <input type="text" placeholder="Search" aria-label="Search">
    <button type="submit">Search</button>
  </form>
  </div>
=======
        
      </ul> 
  </div>

>>>>>>> sauvegarde de modif
 </nav>
      