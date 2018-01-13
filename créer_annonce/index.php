<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Coucou</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<!--TO USE COMPONENT-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
   
<!--CSS-->
   <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>

<div class="row no-gutters" id="container1"> 

  <div class="col-6 col-md-2" id="col1">
  	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer">
     <div class="mdl-layout__drawer" style="background-color:  #f7f7f7 !important;">
      <nav class="mdl-navigation">
       <a id="lien" class="mdl-navigation__link" href="">Accueil</a>
       <a id="lien" class="mdl-navigation__link" href="">Mes annonces</a>
       <a id="lien" class="mdl-navigation__link" href="">Mon profil</a>
      </nav>
     </div>
    </div>
  </div>

  <div class="col-6 col-md-9" id="col2">
  	<div class="container">
  	 <h2 id="myh2">Choix de la catégorie</h2>
  	 <div class="row no-gutters">
  	 <div class="col-md-2" id="col2.0"></div>
  	    <div class="col-md-2" id="col2.1">
  	      <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored" style="background-image: url(image/mobile-icon.png) !important;" id="mobile">
          <i class="material-icons"></i>
         </button>
  	    </div>
  	    <div class="col-md-2" id="col2.2">
  	     <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored" style="background-image: url(image/car.png) !important;" id="voiture">
          <i class="material-icons"></i>
         </button>
  	    </div>
  	    <div class="col-md-2" id="col2.3">
  	     <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored" style="background-image: url(image/t-shirt.png) !important;" id="vetement"> 
           <i class="material-icons"></i>
         </button>
  	    </div>
  	    <div class="col-md-2" id="col2.4">
  	     <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored" style="background-image: url(image/house.png) !important;" id="maison">
           <i class="material-icons"></i>
         </button>
  	    </div>
  	    <div class="col-md-2" id="col2.5">
  	      <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored" style="background-image: url(image/pc.png) !important;" id="pc">
            <i class="material-icons"></i>
         </button>
  	    </div>
  	 </div>
  	 <!--Ligne 3-->
      <div class="row no-gutters" id="ligne3">
      	 <div class="col-md-3" id="col3.1">
      	 	<p id="myp" style="visibility: hidden !important; margin-right:40px !important;"> Sous catégorie</p>
      	 </div>
      	 <div class="col-md-3" id="col3.2">
      	 <!--Selection du choix-->
      	 	<select method="POST" action="page2.php" class="form-control border-top-0 border-left-0 border-right-0" id="menu_sel" style="visibility: hidden !important;" name="select">
            </select>
      	 </div>
      	 <div class="col-md-3" id="col3.3"></div>
      </div>
      <!--Ligne 4-->
      <div class="row no-gutters" id="ligne4">
      	 <div class="col-md-4" id="col4.1"></div>
      	 <div class="col-md-1" id="col4.2"></div>
      	 <div class="col-md-4" id="col4.3">
      	 <ul>
      	 <li>
      	    <!-- Colored raised button -->
             <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
               Annuler
             </button>
         </li>
      	 <li>
      	 	 <!-- Accent-colored raised button with ripple -->
             <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="bouton_suivant"> Suivant
           </button>
      	 </li>
      	 </ul>
      	 </div>
      </div>
       <!--Ligne 5-->
      <div class="row no-gutters" style="height:10px !important;">
      	 <div class="col-md-3" id="col5.1"></div>
      	 <div class="col-md-3" id="col5.2"></div>
      	 <div class="col-md-3" id="col5.3"></div>
      </div>
    </div>
  </div>
</div>






<!--TO USE COMOPONENT-->
 <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<!--bootstrap-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/min.js"></script>
 </body>
</html>

