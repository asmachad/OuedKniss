

<?php

$categorie=$_GET['categorie'];
$s_categorie=$_GET['s_categorie'];

switch ($categorie) {
    case "mobile":
        ?>
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

   <link rel="stylesheet" type="text/css" href="css/style2.css">
  </head>
  <body>

     <div class="row no-gutters" id="ligne1">
      <div class="col-6 col-md-2" id="col1"></div>
      <div class="col-6 col-md-9" id="col2">
        <div class="left" style="background-color: white !important;">
          <div id="div_vide" style="height:30px !important;"></div>
          <h2 id="myh2">Détails sur le téléphone</h2>
           <form id="form1">
             <div id="select1">
              <select class="form-control border-top-0 border-left-0 border-right-0" id="menu_sel1">
              <option  disabled selected>Marque</option>
              <option>G+next</option>
              <option>Samsung</option>
              <option>Iphone</option>
              <option>Lenovo</option>
              <option>Condor</option>
            </select>
             
                    
             </div>
            <div id="select2">
              <select class="form-control border-top-0 border-left-0 border-right-0" id="menu_sel2">
              <option  disabled selected>Modéle</option>
              <option>G+Next 1.1</option>
              <option>Iphone 7</option>
              <option>Iphone 6</option>
              <option>Iphone 5</option>
              <option>Galaxy s7</option>
            </select>
            </div>
            <div id="select3">
              <select class="form-control border-top-0 border-left-0 border-right-0" id="menu_sel3">
              <option disabled selected>Options</option>
              <option>Bluetooth</option>
              <option>Double batterie</option>
              <option>Double puce</option>
            </select>
            </div>
              <div class="group" id="description">      
               <input type="text" required id="descriptionM">
               <span class="highlight"></span>
               <span class="bar"></span>
               <label>Déscription</label>
             </div>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" id="bouton">
               Suivant
             </button>

          </form>
         
        </div>
      </div> 
     </div> 
  
 



<!--TO USE COMOPONENT-->
 <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<!--bootstrap-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/min2.js"></script>
  </body>
</html>

        <?php
        break;
    case "voiture":    //champs relatifs à voiture //
      ?>
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

   <link rel="stylesheet" type="text/css" href="css/style2.css">
  </head>
  <body>

     <div class="row no-gutters" id="ligne1">
      <div class="col-6 col-md-2" id="col1"></div>
      <div class="col-6 col-md-9" id="col2">
        <div class="left" style="background-color: white !important;">
          <div id="div_vide" style="height:30px !important;"></div>
          <h2 id="myh2">Détails sur la voiture</h2>
           <form id="form1">
             <div id="select1">
              <select class="form-control border-top-0 border-left-0 border-right-0" id="menu_sel1">
              <option  disabled selected>Marque</option>
              <option>Audi</option>
              <option>Volkswagen</option>
              <option>Renault</option>
              <option>Peugeot</option>
            </select>
             
                    
             </div>
            <div id="select2">
              <select class="form-control border-top-0 border-left-0 border-right-0" id="menu_sel2">
              <option  disabled selected>Modéle</option>
              <option>Golf 4</option>
              <option>Golf 5</option>
              <option>Golf 6</option>
              <option>Golf 7</option>
            </select>
            </div>
            <div id="select3">
              <select class="form-control border-top-0 border-left-0 border-right-0" id="menu_sel3">
              <option disabled selected>Etat</option>
              <option>Neuve</option>
              <option>Accidentée</option>
            </select>
            </div>
              <div class="group" id="description">      
               <input type="text" id="descriptionM">
               <span class="highlight"></span>
               <span class="bar"></span>
               <label>Déscription</label>
             </div>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" id="bouton">
               Suivant
             </button>

          </form>
         
        </div>
      </div> 
     </div> 
  
 



<!--TO USE COMOPONENT-->
 <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<!--bootstrap-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/min2.js"></script>
  </body>
</html>

<?php


        break;
    case "vetement":
        echo "vetement";
        break;
}

?>




