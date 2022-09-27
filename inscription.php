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
        <!-- ICI LA LIGNE 35 C'EST POUR DIRE SI LE USER CLIQUE SUR S'inscrire -->
       
        <?php
        session_start();
            $serveur="localhost";
            $login="root";
            $pass="";

            $nom="";
            $prenom="";
            $email="";
            $mdp="";
            $repeatmdp="";
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
                $repeatmdp=securisation($_POST['repeatmdp']);
                if($nom&&$prenom&&$email&&$mdp&&$repeatmdp)
                {
                    if($mdp==$repeatmdp)
                    {
                        //CONNEXION ON THE BD HERE WHE DIDN'T TRY THE CONNECTED DIRECTLY 
                    $connexion= new PDO("mysql:host=$serveur;dbname=test2",$login,$pass);

            /*ENREGISTREMENT DES ENTREES DANS LE BDD */
                    // SI ON TOUVE DEUX EMAIL IDEM ALORS
        
                    $requete1=$connexion->prepare(
                    "INSERT INTO users(nom,prenom,email,mdp)
                     VALUES(:nom,:prenom,:email,:mdp)"
                        );
                     $requete1->bindParam(':nom',$nom);
                     $requete1->bindParam(':prenom',$prenom);
                     $requete1->bindParam(':email',$email);
                     $requete1->bindParam(':mdp',$mdp);
                     $requete1->execute();

                    $recupUser=$connexion->prepare('SELECT * FROM users WHERE nom= ? AND mdp= ?');
                    $recupUser->execute(array($nom,$mdp));
                    if ($recupUser->rowCount()>0) {
                    $_SESSION['nom']= $nom;
                    $_SESSION['prenom']= $prenom;
                    $_SESSION['email']= $email;
                    $_SESSION['mdp']= $mdp;
                    $_SESSION['id']= $recupUser->fetch()['id'];}    
                    
                    echo $_SESSION['id'];
                    /*echo " inscription finie<a href='connexion.php'> connectez</a>vous";*/
                    /*LE DIE EST MIEUX CAR IL DETRUIT LA*/
                    die("
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
                        <pre1>inscription finie<a  href='connexion.php'> connectez</a>-vous</pre1>");
                    }else echo "
                        <style>
                        pre{
                            text-align:center;
                            color:red;
                            font-size:25px;
                            font-weight: bolder;
                        }
                        </style>
                        <pre>Les password doivent être tous idem </pre>";
                }else echo "
                <style>
                    pre{
                        text-align:center;
                        color:red;
                        font-size:25px; 
                        font-weight: bolder;
                    }
                </style>
                <pre>Veuillez saisir tous les champs</pre>";
           
        }  
        ?>
        
        </header>
        <form class="inscription" method="POST" action="inscription.php">

            <p>Nom:</p>
            <input type="text" name="nom" autocomplete="off">
            <p>Prenom:</p>
            <input type="text" name="prenom" autocomplete="off">
            <p>Email:</p>
            <input type="text" name="email" autocomplete="off">
            <p>Mot de pass</p>
            <input type="password" name="mdp" autocomplete="off">
            <p>Confirmez le mot de pass</p>
            <input type="password" name="repeatmdp" autocomplete="off"><br></br>

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
    width: 450px;
    height: 400px;
    margin-left: 500px;
    margin-top: 100px;
    background-color: grey;
    border-width: 10px;
}
p{
    font-size: 16px;
    font-style: normal;
}
.envoi{
    font-style: normal;
    font-size: 16px;
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