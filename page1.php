<!DOCTYPE html>
<html lang="fr-FR" >
    <head>
    	<title>PHP et Mysql</title>
    	<meta charset="utf-8">
        </head>
    <body>
        <header>
        <?php include("entete.php");
        ?>
        </header>

        <section>
        <?php 
        session_start();
        echo "NOM:".$_SESSION['nom'];
        ?>
         <?php
            //systeme de securite ici, on verifie si le user a rentre le mdp dans le cas contraire on le redirige vers la page de connexion
            if(!$_SESSION['mdp'])
            {
                header('Location:connexion.php');
            }
        ?>
             <p>COSTUMES</p>
        <div class="ghost">
            <div class="images">
                <img class="imgs" src="for the plan/V1.JPG">
                <img class="imgs" src="for the plan/V2.JPG">
                <img class="imgs" src="for the plan/V3.JPG">
                <img class="imgs" src="for the plan/V4.JPG">
                <img class="imgs" src="for the plan/V5.JPG">
                <img class="imgs" src="for the plan/V6.JPG">
                <img class="imgs" src="for the plan/V7.JPG">
                <img class="imgs" src="for the plan/V8.JPG">
                <img class="imgs" src="for the plan/V9.JPG">
                <img class="imgs" src="for the plan/V10.JPG">
                <img class="imgs" src="for the plan/V11.JPG">
                <img class="imgs" src="for the plan/V12.JPG">
                <img class="imgs" src="for the plan/V13.JPG">
                <img class="imgs" src="for the plan/V14.JPG">
                <img class="imgs" src="for the plan/V15.JPG">
                <img class="imgs" src="for the plan/V16.JPG">
                <img class="imgs" src="for the plan/V17.JPG">
                <img class="imgs" src="for the plan/V18.JPG">
                <img class="imgs" src="for the plan/images.JPG">
                <img class="imgs" src="for the plan/download.JPG">
            </div>
            </div>
            <div class="great">
                <a class="but" href="commande1.php">COMMANDER</a>
            </div>

            <div class="right1">
            <pre class="wishin1">
                Ne cherchez plus ailleurs! 
                Du oufff chez shoppingonline commandez et réservez tous 
                vos produits en bonne qualité et en toute assurance.
                Nous avons des costumes de toutes sortes venant 
                d'ici et d'ailleur.Ils sont faits sur messures .
                Finis  les coustumes de mauvaises qualités qui n'ont 
                rien avoir avec votre forme.
                Chez choppingonline c'est TRY -> STAY! 
            </pre><br></br>
            </div>
        </section>

        <section>
        <p>SOULIERS</p>
        <div class="ghost2">
           <div class="images">
            <img class="imgs" src="for the plan/S1.JPG">
            <img class="imgs" src="for the plan/S2.JPG">
            <img class="imgs" src="for the plan/S3.JPG">
            <img class="imgs" src="for the plan/S4.JPG">
            <img class="imgs" src="for the plan/S5.JPG">
            <img class="imgs" src="for the plan/S6.JPG">
            <img class="imgs" src="for the plan/ooooo.JPG">
            <img class="imgs" src="for the plan/SS.JPG">
            <img class="imgs" src="for the plan/shoes.JPG">
            <img class="imgs" src="for the plan/S7.JPG">
            <img class="imgs" src="for the plan/S8.JPG">
            <img class="imgs" src="for the plan/S9.JPG">
            <img class="imgs" src="for the plan/S10.JPG">
            <img class="imgs" src="for the plan/S11.JPG">
            <img class="imgs" src="for the plan/S12.JPG">
            <img class="imgs" src="for the plan/S13.JPG">
            <img class="imgs" src="for the plan/S14.JPG">
            <img class="imgs" src="for the plan/S15.JPG">
            <img class="imgs" src="for the plan/S16.JPG">
            <img class="imgs" src="for the plan/S17.JPG">            
            </div>
        </div> 
        <div class="great">
            <a  class="but" href="commande2.php">COMMANDER</a>
        </div> 
        <div class="right1">
            <pre class="wishin2">
            Que des produits de bonnes qualites chez shoppingonline.
            Plus  jamais de soulier séré, chez shoppingonline vous 
            avez à votre disposition toutes sortes de souliers désirés
            et faites sur mesures choisisez votre model et le tour est
             joué comme par magie<br></br>
            </pre> 
        </div>
    
        </section>
        <a href="deconnexion.php"><button>Se deconnecter</button></a>
    </body>
    <footer>
      <div class="why">  
        <img class="logo2" src="for the plan/logo1.PNG">
     </div>        
        <?php include("footer.php");
       ?> 
   </footer>

</html>

<style>
button{
    text-align: center;
    color: red;
    font-size: 20px;
    margin-left: 600px;
}
button:hover{
    background-color: black;
}
.wishin1{
    margin-top: -280px;
}
.wishin2{
    margin-top: -290px;
}
.great{
    text-align: center;
    margin-bottom: 60px;
}
.but{
    font-style: oblique;
    color: white;
    font-weight: bolder;
    background-color: gray;
}
.but:hover{
    font-weight: 50px;
    color: white; 
    background-color: black; 
}
header{
    width: 100%;
    margin-top: 0px;
    padding: 0px;
    height: 78px;
}
.logo2{
    height: 60px;
    margin-bottom: 10px;
}


.imgs{
    width: 200px;
    height: 250px;
    animation-duration: 20s;
    animation-name: mesimages;
    animation-iteration-count: infinite;
}
.images{
    display: flex;
    /*le display fex permet de faire un inline block sans de retour a la ligne jamais*/
    float: left;
}
.why{
    float: left;
    margin-left: 10px;
    margin-top: 10px;
}
@keyframes mesimages{
    0% {
        transform: translateX(0px);
    }
    5% {
        transform: translateX(-200Px);
    }
    10% {
        transform: translateX(-400px);
    }
    15% {
        transform: translateX(-600px);
    }
    20% {
        transform: translateX(-800px);
    }
    25% {
        transform: translateX(-1000px);
    }
        
    30% {
        transform: translateX(-1200Px);
    }
    35% {
        transform: translateX(-1400px);
    }
    40% {
        transform: translateX(-1600px);
    }
    45% {
        transform: translateX(-1800px);
    }
    50% {
        transform: translateX(-2000px);
    }
     55% {
        transform: translateX(2200);
    }
    60% {
        transform: translateX(-2400Px);
    }
    65% {
        transform: translateX(-2600px);
    }
    70% {
        transform: translateX(-2800px);
    }
    75% {
        transform: translateX(-3000px);
    }
    80% {
        transform: translateX(-3200px);
    }
        
    85% {
        transform: translateX(-3400Px);
    }
    90% {
        transform: translateX(-3600px);
    }
    95% {
        transform: translateX(-3800px);
    }
    100% {
        transform: translateX(-4000px);
    }
}
body{
    padding: 0px;
    margin-bottom: -40px;
}
footer{
    margin: 0px;
    padding: 0px;
    height: 80px;
    width: 100%;
    margin-top: -30px;
}
.ghost{
    width: 300px;
    overflow: hidden;
    /*ce ci est une boite pour les images on a defini le width. le overflow:auto  permet d'addapter les image a la boite et leoverflow:hidden cache la bare de deffilement  */
    border: 3px solid transparent ;
    margin-left: 10%;
    top: 40%
}
.ghost2{
    width: 300px;
    overflow: hidden;
    /*ce ci est une boite pour les images on a defini le width. le overflow:auto  permet d'addapter les image a la boite et leoverflow:hidden cache la bare de deffilement  */
    border: 3px solid transparent ;
    margin-left: 10%;
    top: 40%;
    margin-bottom: 60px;

}
p{
    text-align: center;
    font-style: oblique;
    font-size: 20px;
    font-weight: bolder;
    text-decoration: underline;

}
body{
    background-color: skyblue;
    margin-bottom: 0px;
    margin-top: 0;
    margin-left: 0px;
    margin-right: -10px;
}
section{
    height: 65%;
    width: 100%;
    border: solid 5px black;
    margin-top: -10px;
    margin-bottom: -10px;
}
.right1{
    margin-left: 550px;
    margin-top: -190px;
    margin-bottom: 50px;
    font-size: 20px;
}
</style>