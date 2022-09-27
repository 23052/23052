<!DOCTYPE html>
<html lang="fr-FR" >
    <head>
        <title>PHP et Mysql</title>
        <meta charset="utf-8">
        </head>
    <body>
       <?php 
       /*POUR SE CONNECTER A UNE BASE DE DONNEE EXCISTANTE*/
       $serveur="localhost";
       $login="root";
       $pass="";

       try{
       $connexion= new PDO("mysql:host=$serveur;dbname=test2",$login,$pass);
       $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
        $jointure_int="SELECT users.nom,commande.code FROM users
        INNER JOIN commande ON users.id=commande.id_inscrit";
        $requete=$connexion->prepare($jointure_int);
        $requete->execute();
      }

      catch(PDOException $e){
        echo "echec de la connexion:" .$e->getMessage();
      }
    ?>
    </body>
</html>