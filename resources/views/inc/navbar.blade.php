<style type="text/css">
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
    <a href="#">{{config('app.name', 'Scolarité')}}</a>  
    <div id="navbarsExampleDefault">
    <ul class="ulNav">
        <li><a href="/TP_IGL/public/">Home</a></li>
        <li><a href="/TP_IGL/public/about">About</a></li>
        <li><a href="/TP_IGL/public/note/create">Affichage des moyennes</a></li>
        <li><a href="/TP_IGL/public/AjouterEtudiant">Ajouter étudiant</a></li>
    </ul> 
</div>
</nav>
      

    
  
