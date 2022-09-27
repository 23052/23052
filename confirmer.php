<!DOCTYPE html>
<html lang="fr-FR" >
    <head>
        <title>shoppingonline</title>
        <meta charset="utf-8">
        </head>
        <?php
            $serveur="localhost";
            $login="root";
            $pass="";

            $numero="";
            $code="";
            function securisation($donnees){
                $donnees=trim($donnees);//le trim permet de supp les espaces renter en trop et les retour a la ligne 
                $donnees=stripslashes($donnees);//pour echapper aux antislashes
                $donnees=strip_tags($donnees);
                return $donnees;
            }
            ?>
            <?php 
            //la session permet de recuperer les donnes de l'utilisateur une fois connecte.
            session_start();
            echo "NOM: ".$_SESSION['nom'];   
            if(isset($_POST['submit'])) 
            {
                $numero=securisation($_POST['numero']);
                $code=securisation($_POST['code']);
                if($numero&&$code)
                {
                    try{
                    $connexion= new PDO("mysql:host=$serveur;dbname=test2",$login,$pass);
                    $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    /*ENREGISTREMENT DES ENTREES DANS LE BDD */

                    $requete=$connexion->prepare(
                    "INSERT INTO commande(numero,code)
                     VALUES(:numero,:code)"
                        );
                     $requete->bindParam(':numero',$numero);
                     $requete->bindParam(':code',$code);
                    $requete->execute();
                    die("
                        CONGRATULATION! nous vous appelons");
                     }
                    catch(PDOException $e){
                    echo "echec de la connexion:" .$e->getMessage();
                    } 
                 }else echo "
                 <style>
                        pre1{
                            text-align:center;
                            margin-left:400px;
                            margin-top:400px;
                            color:red;
                            font-size:40px;
                            font-weight: bolder;
                        }
                        </style>
                        <pre1>entrez tous les champs</pre1>";   

            }     
                ?>
    <body>
     <form class="inscription" method="POST" action="Confirmer.php" align="center">
            <p class="forme">Numero du compte:</p><br></br>
            <input type="text" name="numero" autocomplete="off">
            <p class="forme">Code du compte:</p><br></br>
            <input type="text" name="code" autocomplete="off"><br></br>
            <input class="envoi" type="submit" value="Confirmer" name="submit">
    </form>

    </body>
</html> 

<style>
.forme{
    font-size: 20px;
}
.inscription{
    text-align: center;
    border: double;
    border-color: skyblue;
    border-width: 10px;
    width: 450px;
    height: 400px;
    margin-left: 500px;
    margin-top: 100px;
    background-color: grey;
}
</style>        