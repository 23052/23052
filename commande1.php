<!DOCTYPE html>
<html lang="fr-FR" >
    <head>
    	<title></title>
    	<meta charset="utf-8">
        </head>
    <body>
        <header>
        <?php include("entete.php");
        ?>
        </header>
        <p class="produits">Produits similaire </p>
        <article>
        <?php 
            session_start();
            echo "NOM:".$_SESSION['nom'];
        ?>
            <section>
                <img class="imgs" src="for the plan/Q1.JPG">
                <div class="right">
                    NOM:CARREAU<br></br>
                    Vous ètes interessé par ce produit?
                    <p><div class="deco">Prix:40£</div></p>
                    <a class="but" href="achat.php">acheter</a>    
                </div>
            </section>
            <section>
                <div class="right">
                NOM:BORLDER<br></br>
                Vous ètes interessé par ce produit?
                <p><div class="deco">Prix:42£</div></p>
                <a class="but" href="achat.php">acheter</a>
                </div>
                <img class="imgs" src="for the plan/Q5.JPG">

            </section>
            <section>
                <div class="right">
                NOM:TIGRE<br></br>
                Vous ètes interessé par ce produit?
                <p><div class="deco">Prix:40£</div></p>
                <a class="but" href="achat.php">acheter</a>
                </div>
                <img class="imgs" src="for the plan/Q6.JPG">
            </section>
            <section>
                <div class="right">
                NOM:RAYE<br></br>
                Vous ètes interessé par ce produit?
                <p><div class="deco">Prix:40£</div></p>
                <a class="but" href="achat.php">acheter</a>
                </div>
                <img class="imgs" src="for the plan/Q7.JPG">
            </section>
            <section>
                <div class="right">
                NOM:SIMPLE<br></br>
                Vous ètes interessé par ce produit?
                <p><div class="deco">Prix:35£</div></p>
                <a class="but" href="achat.php">acheter</a>
                </div>
                <img class="imgs" src="for the plan/Q9.JPG">
            </section>
            <section>
                <div class="right">
                NOM:C RAYE<br></br>
                Vous ètes interessé par ce produit?
                <p><div class="deco">Prix:50£</div></p>
                <a class="but" href="achat.php">acheter</a>
                </div>
                <img class="imgs" src="for the plan/Q11.JPG">
            </section>
            <section>
                <div class="right">
                NOM:TREHI<br></br>
                Vous ètes interessé par ce produit?
                <p><div class="deco">Prix:55£</div></p>
                <a class="but" href="achat.php">acheter</a>
                </div>
                <img class="imgs" src="for the plan/Q12.JPG">
            </section>
            <section>
                <div class="right">
                NOM:4B<br></br>
                Vous ètes interessé par ce produit?
                <p><div class="deco">Prix:70£</div></p>
                <a class="but" href="achat.php">acheter</a>
                </div>
                <img class="imgs" src="for the plan/Q13.JPG">
            </section>
            <section>
                <div class="right">
                NOM:CEINTURE<br></br>
                Vous ètes interessé par ce produit?
                <p><div class="deco">Prix:100£</div></p>
                <a class="but" href="achat.php">acheter</a>
                </div>
                <img class="imgs" src="for the plan/Q16.JPG">
            </section>
            <section>
                <div class="right">
                NOM:BRODE<br></br>
                Vous ètes interessé par ce produit?
                <p><div class="deco">Prix:80£</div></p>
                <a class="but" href="achat.php">acheter</a>
                </div>
                <img class="imgs" src="for the plan/Q20.JPG">
            </section>
            <section>
                <div class="right">
                NOM:4B.O<br></br>
                Vous ètes interessé par ce produit?
                <p><div class="deco">Prix:80£</div></p>
                <a class="but" href="achat.php">acheter</a>
                </div>
                <img class="imgs" src="for the plan/Q21.JPG">
                <a href="deconnexion.php"><button>Se deconnecter</button></a>
            </section>
        </article>
    </body>
</html>
<style>
.deco{
    text-decoration: underline;
    color: red;
}
.but{
    font-style: oblique;
    color: white;
    font-weight: bolder;
    background-color: gray;
    text-decoration: none;
}
.but:hover{
    font-weight: 50px;
    color: white; 
    background-color: black; 
}
.right{
    float: right;
    margin-right: 40px;
    margin-top: 30px;
    font-size: 25px;
    font-style: normal;
}
.imgs{
    width: 200px;
    height: 250px;
    animation-duration: 20s;
    animation-name: mesimages;
    animation-iteration-count: infinite;
}
.produits{
    font-size: 29px;
    text-align: center;
    text-decoration: underline;
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
body{
    margin-top: 0px;
    margin-left: 0px;
}
section{
    height: 250px;
    border: solid 3px grey;
}
.produits{
    font-size: 20px;
    text-align: center;
    text-decoration: underline;
}
</style>