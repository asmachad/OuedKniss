<?php
  
    $marque=$_GET['marque'];
    $modele=$_GET['modele'];
    $option_etat=$_GET['option_etat'];
    $description=$_GET['descriptionM'];
    $categorie=$_GET['categorie'];
  

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
        <div class="left" style="background-color: white !important;">
          <div id="div_vide" style="height:30px !important;"></div>
          <h2 id="myh2">Détails de l'annonce</h2>
           <form  action="controlleur/controle.php" method="POST" id="form1">
          
             <div class="group">      
               <input type="text" name="titre" id="titre" required>
               <span class="highlight"></span>
               <span class="bar"></span>
               <label>Titre de l'annonce</label>
             </div>

             <div class="group">      
               <input type="text" name="prix" id="prix" required>
               <span class="highlight"></span>
               <span class="bar"></span>
               <label>Prix DA</label>
             </div>

             <div id="select 1">
               
              <select class="form-control border-top-0 border-left-0 border-right-0" name="wilaya" id="menu_sel" required>
                <option disabled selected>Wilaya</option>
                <option id="wilaya">Alger</option>
                <option id="wilaya">Adrar</option>
                <option id="wilaya">Chlef</option>
                <option id="wilaya">Tizi ouzou</option>
               </select>
             </div>
            <div id="select2">
              <select class="form-control border-top-0 border-left-0 border-right-0" name="delai" id="menu_sel" required>
              <option disabled selected>Délai de désactivation</option>
              <option id="delai">3 mois</option>
              <option id="delai">6 mois</option>
              <option id="delai">9 mois</option>
              <option id="delai">plus</option>
            </select>
            </div>
               <div style="height:0px !important; margin-bottom:05px !important;">
                 <input name="marque" type="text" class="textfield" id="fname"  value = <?php echo $_GET["marque"]; ?> />

                 <input name="modele" type="text" class="textfield" id="fname"  value = <?php echo $_GET["modele"]; ?> />
            
                 <input name="option_etat" type="text" class="textfield" id="fname"  value = <?php echo $_GET["option_etat"]; ?> />

                  <input name="description" type="text" class="textfield" id="fname"  value = <?php echo $_GET["descriptionM"]; ?> />
            
                  <input name="categorie" type="text" class="textfield" id="fname"  value = <?php echo $_GET["categorie"]; ?> />
            
                 </div>
                 <a href="index.php" class="btn btn-secondary btn-lg active" id="boutona1" role="button" aria-pressed="true">Annuler</a>
             <input type="submit" value="Créer" id="bouton1" class="btn btn-primary"/>
               
          </form>
         
        </div>
      </div> 
     </div> 
<!--TO USE COMOPONENT-->
 <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<!--bootstrap-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    
  </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
<script type="text/javascript" src=""></script>
  </body>
</html>

