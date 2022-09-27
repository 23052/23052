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
            echo "NOM: ".$_SESSION['nom'];
        ?>
            <section>
                <img class="imgs" src="for the plan/C0.JPG">
                <div class="right">
                    NOM:shoe1<br></br>
                    Vous ètes interessé par ce produit?
                    <p><div class="deco">Prix:30£</div></p>
                    <a class="but" href="achat.php">acheter</a>    
                </div>
            </section>
            <section>
                <div class="right">
                NOM:shoe2<br></br>
                Vous ètes interessé par ce produit?
                <p><div class="deco">Prix:40£</div></p>
                <a class="but" href="achat.php">acheter</a>
                </div>
                <img class="imgs" src="for the plan/C1.JPG">

            </section>
            <section>
                <div class="right">
                NOM:shoe3<br></br>
                Vous ètes interessé par ce produit?
                <p><div class="deco">Prix:35£</div></p>
                <a class="but" href="achat.php">acheter</a>
                </div>
                <img class="imgs" src="for the plan/C2.JPG">
            </section>
            <section>
                <div class="right">
                NOM:shoe4<br></br>
                Vous ètes interessé par ce produit?
                <p><div class="deco">Prix:40£</div></p>
                <a class="but" href="achat.php">acheter</a>
                </div>
                <img class="imgs" src="for the plan/C3.JPG">
            </section>
            <section>
                <div class="right">
                NOM:shoe5<br></br>
                Vous ètes interessé par ce produit?
                <p><div class="deco">Prix:40£</div></p>
                <a class="but" href="achat.php">acheter</a>
                </div>
                <img class="imgs" src="for the plan/C6.JPG">
            </section>
            <section>
                <div class="right">
                NOM:shoe6<br></br>
                Vous ètes interessé par ce produit?
                <p><div class="deco">Prix:40£</div></p>
                <a class="but" href="achat.php">acheter</a>
                </div>
                <img class="imgs" src="for the plan/C7.JPG">
            </section>
            <section>
                <div class="right">
                NOM:shoe7<br></br>
                Vous ètes interessé par ce produit?
                <p><div class="deco">Prix:40£</div></p>
                <a class="but" href="achat.php">acheter</a>
                </div>
                <img class="imgs" src="for the plan/C10.JPG">
            </section>
            <section>
                <div class="right">
                NOM:shoe8<br></br>
                Vous ètes interessé par ce produit?
                <p><div class="deco">Prix:40£</div></p>
                <a class="but" href="achat.php">acheter</a>
                </div>
                <img class="imgs" src="for the plan/C12.JPG">
            </section>
            <section>

                
                <div class="right">
                NOM:shoe9<br></br>
                Vous ètes interessé par ce produit?
                <p><div class="deco">Prix:40£</div></p>
                <a class="but" href="achat.php">acheter</a>
                </div>
                <img class="imgs" src="for the plan/S9.JPG">
            </section>
            <section>
                <div class="right">
                NOM:shoe10<br></br>
                Vous ètes interessé par ce produit?
                <p><div class="deco">Prix:40£</div></p>
                <a class="but" href="achat.php">acheter</a>
                </div>
                <img class="imgs" src="for the plan/S6.JPG">
            </section>
            <section>
                <div class="right">
                NOM:shoe11<br></br>
                Vous ètes interessé par ce produit?
                <p><div class="deco">Prix:40£</div></p>
                <a class="but" href="achat.php">acheter</a>
                </div>
                <img class="imgs" src="for the plan/S5.JPG">
            </section>
            <section>
                <div class="right">
                NOM:shoe12<br></br>
                Vous ètes interessé par ce produit?
                <p><div class="deco">Prix:40£</div></p>
                <a class="but" href="achat.php">acheter</a>
                </div>
                <img class="imgs" src="for the plan/S10.JPG">
            </section>
            <section>
                <div class="right">
                NOM:shoe13<br></br>
                Vous ètes interessé par ce produit?
                <p><div class="deco">Prix:40£</div></p>
                <a class="but" href="achat.php">acheter</a>
                </div>
                <img class="imgs" src="for the plan/S18.JPG">
                <section>
                <div class="right">
                NOM:shoe14<br></br>
                Vous ètes interessé par ce produit?
                <p><div class="deco">Prix:40£</div></p>
                <a class="but" href="achat.php">acheter</a>
                </div>
                <img class="imgs" src="for the plan/S19.JPG">
            </section>
            <section>
                <div class="right">
                NOM:shoe15<br></br>
                Vous ètes interessé par ce produit?
                <p><div class="deco">Prix:40£</div></p>
                <a class="but" href="achat.php">acheter</a>
                </div>
                <img class="imgs" src="for the plan/S20.JPG">
            </section>
            <section>
                <div class="right">
                NOM:shoe16<br></br>
                Vous ètes interessé par ce produit?
                <p><div class="deco">Prix:40£</div></p>
                <a class="but" href="achat.php">acheter</a>
                </div>
                <img class="imgs" src="for the plan/S21.JPG">
                <a href="deconnexion.php"><button>Se deconnecter</button></a>
            </section>
        </article>   
    </body>
</html>
<style>
footer{
    margin-left: 0px;
    padding: 0px;
    height: 80px;
    width: 100hv;
    margin-bottom: -30px;
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
    margin-top: 40px;
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
section{
    height: 250px;
    border: solid 3px grey;
}
.produits{
    font-size: 29px;
    text-align: center;
    text-decoration: underline;
}
header{
    width: 100%;
    margin-top: 0px;
    padding: 0px;
    height: 78px;
}
</style>