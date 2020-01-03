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
    <!-- navbar -->
    <ul class="ulNav">
        <!-- lien vers la page Homz -->
        <li class="linav"><a href="/TP_IGL/public/">Home</a></li>
        <!-- lien vers la page Afficher moyenne -->
        <li class="linav"><a href="/TP_IGL/public/marks/create">Affichage des moyennes</a></li>
        <!-- lien vers la page Ajouter étudiant -->
        <li class="linav"><a href="/TP_IGL/public/students/CreerEtudiantForm">Ajouter étudiant</a></li>
        <!-- lien vers la page About -->
        <li class="linav"><a href="/TP_IGL/public/about">About</a></li>
    </ul> 
</div>
</nav>
      

