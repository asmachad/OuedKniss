<?php

  
  $marque=$_POST['marque'];
  $modele=$_POST['modele'];
  $option_etat=$_POST['option_etat'];
  $description=$_POST["description"];
  $titre=$_POST["titre"];
  $prix=$_POST["prix"];
  $wilaya=$_POST["wilaya"];
  $delai=$_POST["delai"];
  $categorie=$_POST['categorie'];

  echo $marque;
  echo "ok \n";
  echo $modele;
  echo "ok \n";
  echo $option_etat;
  echo "ok \n";
  echo $description;
  echo "ok \n";
  echo $titre;
  echo "ok \n";
  echo $prix;
  echo "ok \n";
  echo $wilaya;
  echo "ok \n";
  echo $delai;
  echo "ok \n";
  echo $categorie;
  echo "ok \n";
  include_once('connectbdd.php');
  $requete=get_annonces();
  $count = $requete->rowCount();
  echo $count;

   if(isset($_POST['categorie']) AND !empty($_POST['titre']) AND isset($_POST['marque']) AND !empty($_POST['modele']) AND isset($_POST['option_etat']) AND !empty($_POST['description']) AND isset($_POST['prix']) AND !empty($_POST['wilaya']) AND isset($_POST['delai']))
    {
    	echo "ok";
       ajout_annonce($categorie,$titre,$marque,$modele,$option_etat,$description,$prix,$wilaya,$delai);
    }
    else{
    	echo "non";
    }

 
?>