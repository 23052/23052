<!DOCTYPE html>
<html lang="fr-FR" >
    <head>
    	<title>ma page PHP</title>
    	<meta charset="utf-8">
        </head>
    <body>
    <header>
    <?php include("entete.php");
        ?>
    </header>

       <?php
            session_start();
            $serveur="localhost";
            $login="root";
            $pass="";
            $nom="";
            $prenom="";
            $email="";
            $mdp="";
            function securisation($donnees){
                $donnees=trim($donnees);//le trim permet de supp les espaces renter en trop et les retour a la ligne 
                $donnees=stripslashes($donnees);//pour echapper aux antislashes
                $donnees=strip_tags($donnees);
                return $donnees;
            } 
            ?>

        <?php
  
            if(isset($_POST['submit']))
            {
                $nom=securisation($_POST['nom']);
                $prenom=securisation($_POST['prenom']);
                $email=securisation($_POST['email']);
                $mdp=securisation($_POST['mdp']);
                if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mdp']))
                {
                #CONNECTION A LA BDD
          
                    $connexion= new PDO("mysql:host=$serveur;dbname=test2",$login,$pass);
                    $recupUser=$connexion->prepare('SELECT *FROM users WHERE nom=? AND prenom=? AND email=? AND mdp=?');
                    $recupUser->execute(array($nom,$prenom,$email,$mdp));
                        //LA SESSION PERMET D'AVOIR DES INFO SUR LE USERS SUR TOUTE LA PAGE
                    if ($recupUser->rowCount()>0) {
                        $_SESSION['nom']=$nom;
                        $_SESSION['prenom']=$prenom;
                        $_SESSION['email']=$email;
                        $_SESSION['mdp']=$mdp;
                        //le fetch permet de renvoyer la requete preparee
                        $_SESSION['id']=$recupUser->fetch()['id'];
                        //ON VEUT QUE LA PAGE SE DIRIGE VERS PAGE1
                        header('Location:page1.php');
                                    
                    }else{
                        echo "
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

                        <pre1>Vos entrees sont incorrecte</pre1>";
                    }            
                }else echo"
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
                        <pre1>veuillez renseigner tous les champs!</pre1>";
            }
            ?>
        
    <form class="inscription" method="POST" action="connexion.php">

        <p>Nom:</p>
        <input type="text" name="nom" autocomplete="off">
        <p>Prenom:</p>
        <input type="text" name="prenom" autocomplete="off">
        <p>Email:</p>
        <input type="text" name="email" autocomplete="off">
        <p>Mot de pass</p>
        <input type="password" name="mdp" autocomplete="off"><br></br>

        <input class="envoi" type="submit" value="S'inscrire" name="submit">

    </form>


    </body>
</html>
<style>
body{
    margin-top: 0px;
    margin-left: 0px;
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
p{
    font-size: 19px;
    font-style: normal;
}
.envoi{
    font-style: normal;
    font-size: 17px;
    background-color: skyblue;
}
body{
    margin-top: 0px;
    background-image:url(noir.JPG);
    height: 100vh;
    background-size: cover;
/* pour stopper la repetition */    
    background-position: center;
}              
</style>