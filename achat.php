<!DOCTYPE html>
<html lang="fr-FR" >
    <head>
    	<title>shoppingonline</title>
    	<meta charset="utf-8">     
        </head>
    <body>
        <header>
        <?php include("entete.php");
        ?>
        </header>
        <!-- ICI LA LIGNE 20 C'EST POUR DIRE SI LE USER CLIQUE SUR S'inscrire -->
        <?php
            $serveur="localhost";
            $login="root";
            $pass="";

            $nom="";
            $taille="";
            $couleur="";
            $pied="";
            function securisation($donnees){
                $donnees=trim($donnees);//le trim permet de supp les espaces renter en trop et les retour a la ligne 
                $donnees=stripslashes($donnees);//pour echapper aux antislashes
                $donnees=strip_tags($donnees);
                return $donnees;
            }
            ?>
        <?php 
            session_start();   
            if(isset($_POST['submit'])) 
            {
                $nom=securisation($_POST['nom']);
                $taille=securisation($_POST['taille']);
                $couleur=securisation($_POST['couleur']);
                $pied=securisation($_POST['pied']);
                if($nom&&$taille&&$couleur)
                {
                    try{
                    $connexion= new PDO("mysql:host=$serveur;dbname=test2",$login,$pass);
                    $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    /*ENREGISTREMENT DES ENTREES DANS LE BDD */

                    $requete=$connexion->prepare(
                    "INSERT INTO commande(nom,taille,couleur,pied)
                     VALUES(:nom,:taille,:couleur,:pied)"
                        );
                     $requete->bindParam(':nom',$nom);
                     $requete->bindParam(':taille',$taille);
                    $requete->bindParam(':couleur',$couleur);
                    $requete->bindParam(':pied',$pied);
                    $requete->execute();
                    /*echo "Votre commande a été recue<a href='prix.php'>passez au payement</a>";*/
                    /*LE DIE EST MIEUX CAR IL DETRUIT LA*/
                    die("
                    <style>
                    pre{
                            text-align:center;
                            color:red;
                            font-size:25px;
                            font-weight: bolder;
                        }
                    a{
                        color: black;
                    }
                    a:hover{
                        background-color: grey;
                    }
                    </style>
                    <pre>Votre commande a été recue:<br></br>
                      <p>Pour payer en ligne   
                    <a href='prix.php'>Cliquez ici </a></p></pre>");
                    }
                    catch(PDOException $e){
                    echo "echec de la connexion:" .$e->getMessage();
                    } 
                }else echo "
                        <style>
                        pre{
                            text-align:center;
                            color:red;
                            font-size:25px;
                            font-weight: bolder;
                        }
                        </style>
                <pre>Veuillez saisir tous les champs </pre>";
            }
        ?>       
        <form class="inscription" method="POST" action="achat.php">
            <p>Nom du produit:</p>
            <input type="text" name="nom" autocomplete="off">
            <p>Votre taille:</p>
            <input type="text" name="taille" autocomplete="off">
            <p>Si le produit est un soulier,vous chaussez:</p>
            <input type="int" name="pied" autocomplete="off">
            <p>Couleur</p>
                <select name="couleur">
                    <option value="rouge">rouge</option>
                    <option value="jaune">jaune</option>
                    <option value="noir">noir</option>
                    <option value="blanc">blanc</option>
                    <option value="bleu">bleu</option>
                    <option value="vert">vert</option>
                    <option value="marron">marron</option>
                    <option value="gris">gris</option><br></br>                 
                </select><br></br><br></br>
            <input class="envoi" type="submit" value="Confirmer" name="submit">
        </form>
        <a href="deconnexion.php"><button>Se deconnecter</button></a>
    </body>
</html>
<style>
body{
    margin-top: 0px;
    margin-left: 0px;
} 
button{
    text-align: center;
    color: red;
    font-size: 20px;
    margin-left: 670px;
}
button:hover{
    background-color: black;
}   
.inscription{
    text-align: center;
    border: double;
    border-color: skyblue;
    width: 450px;
    height: 400px;
    margin-left: 500px;
    margin-top: 100px;
    background-color: grey;
    border-width: 10px;
}
.envoi{
    font-style: normal;
    font-size: 16px;
    background-color: skyblue;
}
p{
    font-size: 16px;
    font-style: normal;
}
</style>