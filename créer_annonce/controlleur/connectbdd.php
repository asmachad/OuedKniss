<?php

 function  get_annonces()
  {
   try
      {
       $bdd = new PDO('mysql:host=127.0.0.1;dbname=ihm','root','TERZImourad',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

      }

     catch (Exception $e)
      {
	    
        die('Erreur : ' . $e->getMessage());
        return -1;
      }
      $requete=$bdd->query('SELECT * FROM annonce');
     
     return $requete;
   }


     function  ajout_annonce($categorie,$titre,$marque,$modele,$option_etat,$description,$prix,$wilaya,$delai)
      {
          try
      {
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=ihm','root','TERZImourad',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

      }

     catch (Exception $e)
      {
      
        die('Erreur : ' . $e->getMessage());
        return -1;
      }
       $requete=$bdd->query('SELECT  * FROM  annonce');
       $count = $requete->rowCount();
       $inserer=$bdd->prepare('INSERT INTO annonce(id,categorie,marque,modele,option_etat,description,titre,prix,wilaya,delai,date_creation) VALUES(?,?,?,?,?,?,?,?,?,?,?)');
        $inserer->execute(array($count+1,$categorie,$marque,$modele,$option_etat,$description,$titre,$prix,$wilaya,$delai,date("Y-m-d H:i:s")));

       return 0;
      }