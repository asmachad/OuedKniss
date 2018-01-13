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
      <div class="col-6 col-md-2" id="col1">
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer">
         <div class="mdl-layout__drawer" style="background-color:  #f7f7f7 !important;">
          <nav class="mdl-navigation">
           <a  id="lien" class="mdl-navigation__link" href="">Accueil</a>
           <a id="lien"  class="mdl-navigation__link" href="">Mes annonces</a>
           <a  id="lien" class="mdl-navigation__link" href="">Mon profil</a>
         </nav>
        </div>
       </div>
      </div>
       <div class="col-6 col-md-9" id="col2">
         <div class="left" style="background-color: white !important;">
           <div id="div_vide" style="height:30px !important;"></div>
             
             <?php

              $categorie=$_GET['categorie'];
              $s_categorie=$_GET['s_categorie'];
              switch ($categorie) {
               case "mobile":
             ?>
             <h2 id="myh2">Détails sur  <?php if($_GET['s_categorie']=='Tablette')
                {
                  echo  "la ";
                  echo strtolower($_GET['s_categorie']);
                } 
                else
                {
                  echo  "le ";
                  echo strtolower($_GET['s_categorie']);
                }
                ?>
                  

                </h2>
             <form action="page3.php" method="GET" id="form1">
             <div id="select1">
              <select class="form-control border-top-0 border-left-0 border-right-0" name="marque" id="menu_sel1" required>
               <option id="opt" disabled selected>Marque</option>
               <option id="opt">Samsung</option>
               <option id="opt">Iphone</option>
              </select>
             </div>
            <div id="select2">
              <select class="form-control border-top-0 border-left-0 border-right-0" name="modele" id="menu_sel2" required>
               <option id="opt" disabled selected>Modéle</option>
              
               <option id="opt">Iphone 7</option>
               <option id="opt">Iphone 6</option>
               <option id="opt">Iphone 5</option>
               <option id="opt">Galaxy s7</option>
              </select>
            </div>
            <div id="select3">
              <select class="form-control border-top-0 border-left-0 border-right-0" name="option_etat" id="menu_sel3" required>
               <option id="opt" disabled selected>Options</option>
               <option id="opt">Bluetooth</option>
               <option id="opt">Double batterie</option>
               <option id="opt">Double puce</option>
              </select>
            </div>
              <div class="group" id="description">      
                <input type="text" name="descriptionM" required id="descriptionM">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Déscription</label>
             </div>
              <div class="group" style="visibility: hidden !important;">      
               <input type="text" name="categorie" value="mobile">
               <span class="highlight"></span>
               <span class="bar"></span>
               <label>Déscription</label>
             </div>

             <a href="index.php" class="btn btn-secondary btn-lg active" id="boutonas" role="button" aria-pressed="true">Annuler</a>
             <input type="submit" value="Suivant" id="boutons" class="btn btn-primary"/>
          </form>

          <?php
           break;
           case "voiture":    //champs relatifs à voiture //
          ?>
          <h2 id="myh2">Détails sur  <?php if($_GET['s_categorie']=='Automobile')
                {
                  echo  "l'";
                  echo strtolower($_GET['s_categorie']);
                } 
                else
                {
                  echo  "le ";
                  echo strtolower($_GET['s_categorie']);
                }
                ?>
                  



          <form  action="page3.php" method="GET" id="form1">
             <div id="select1">
              <select class="form-control border-top-0 border-left-0 border-right-0" name="marque" id="menu_sel1" required> 
               <option id="opt" disabled selected>Marque</option>
               <option id="opt">Audi</option>
               <option id="opt">Volkswagen</option>
            
              </select>
            </div>
            <div id="select2">
              <select class="form-control border-top-0 border-left-0 border-right-0" name="modele" id="menu_sel2" required>
               <option id="opt" disabled selected>Modéle</option>
               <option id="opt">Golf 4</option>
               <option id="opt">Golf 5</option>
               <option id="opt">Golf 6</option>
               <option id="opt">Golf 7</option>
              </select id="opt">
             </div>
             <div id="select3">
              <select class="form-control border-top-0 border-left-0 border-right-0" name="option_etat" id="menu_sel3" required>
               <option id="opt" disabled selected>Etat</option>
               <option id="opt">Neuve</option>
               <option id="opt">Accidentée</option>
              </select>
             </div>
             <div class="group" id="description">      
               <input type="text" name="descriptionM" id="descriptionM">
               <span class="highlight"></span>
               <span class="bar"></span>
               <label>Déscription</label>
             </div>
              <div class="group" style="visibility: hidden !important; height:0px !important; margin-bottom:-25px!important;">      
               <input type="text" name="categorie" value="voiture">
               <span class="highlight"></span>
               <span class="bar"></span>
               <label>Déscription</label>
             </div>
            <a href="index.php" class="btn btn-secondary btn-lg active" id="boutona" role="button" aria-pressed="true">Annuler</a>
           <input type="submit" value="Suivant" id="bouton" class="btn btn-primary"/>
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
    break;
}

?>
