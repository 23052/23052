<!DOCTYPE html>
<html lang="fr-FR" >
    <head>
    	<title>shoppingonline</title>
    	<meta charset="utf-8">
        </head>

    <body>
        <header>
        <?php 
            session_start();
            include("entete.php");
        ?>
        </header>
        <p class="clique">Cliquez sur l'image pour choisir le moyen de payement</p>
        <?php 
        echo "NOM:".$_SESSION['nom'];
        ?>
    <section>
        <a href="confirmer.php"><img class="resize" src="for the plan/wave.JPG"></a>
        <p class="droite">wave:</p><br></br>
    </section>

    <section>
        <a href="confirmer.php"><img class="resize" src="for the plan/orange.png"></a>
         <p class="droite">Orange Money:</p><br></br>
    </section>
    <section>
        <a href="confirmer.php"><img class="resize" src="for the plan/mtn.JPG"></a>
        <p class="droite">MTN Money:</p><br></br>
    </section>
    <section>
        <a href="confirmer.php"><img class="resize" src="for the plan/carte.JPG"></a>
        <p class="droite">Carte Bancaire:</p><br></br>
    </section>  

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
    margin-left: 600px;
}
button:hover{
    background-color: black;
}   
section{
    height: 250px;
    width: 100%;
    border: solid 2px gray;
    margin: 0px;
}
.resize{
    width: 200px;
    height: 250px;
    margin-top: 0px;
}
.droite{
    float: right;
    color: black;
    font-size: 35px;
    margin-right: 65px;
    margin-top: 44px;
}
.clique{
    text-align: center;
    font-size: 22px;
    text-decoration: underline;
    font-weight: bolder;
    color: red;
    font-style: italic;
}
</style>