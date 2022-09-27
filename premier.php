<!DOCTYPE html>
<html lang="fr-FR" >
    <head>
    	<title>PHP et Mysql</title>
    	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        </head>
    <body>
            <ul> 
                <li><a href="inscription.php">S'inscrire</a></li>
                <li><a href="connexion.php">Se connecter</a></li>
            </ul>
        <div class="ghost">    
            <div class="images">
                <img class="imgs" src="for the plan/mmm.JPG">
                <img  class="imgs" src="for the plan/mmmm.JPG">
                <img  class="imgs" src="for the plan/mmmmm (1).JPG">
                <img  class="imgs" src="for the plan/mmmmm (2).JPG">
                <img  class="imgs" src="for the plan/mmmmm (3).JPG">
                <img  class="imgs" src="for the plan/kk.JPG"  >
                <img  class="imgs" src="for the plan/shoes.JPG"  >
                <img  class="imgs" src="for the plan/ooooo.JPG"  >
            </div>
            </div>    
            <p>VOS COUSTUMES ET CHAUSSURES CHEZ SHOPPINGONLINE</p>
    </body>
</html>
<style>
p{
    text-align: center;
    font-style: italic;
    font-size: 20px;
    font-weight: bolder;
    height: 50px;
    border: solid 5px white;
    margin-bottom: -10px;
    padding-top: -10px;
    background-color: white;
}
ul li a{
    text-decoration: none;
    display: inline-block;
    color: white;
    font-size: 20px;
    height: 30px;
    margin-right: 20px;
    font-size: 30px;   
}
li{
    text-decoration: none;
    display: inline-block;
    float: right;
    padding: 10px;
}
ul{
    width: 100%;
    height:60px;
    margin-left: 0px;
    padding-left: 0px;
    margin-top: 0px;
    padding-top: 0px;
}
/*permet de modifier les texte losque le cusseur est la dessus*/
ul li a:hover{
    border:1px solid transparent;
    background: white;
    font-weight: 50px;
    color: black;  
}
.images{
    display: flex;
    /*le display fex permet de faire un inline block sans de retour a la ligne jamais*/
}
.imgs{
    width:  690px;
    height: 490px;
    animation-duration: 20s;
    animation-name: mesimages;
    animation-iteration-count: infinite;
}
@keyframes mesimages{
    0% {
        transform: translateX(0);
    }
    12.5%{
        transform: translateX(-640px);
    }
    25%{
        transform: translateX(-1280px);
    }
    37.5%{
        transform: translateX(-1920px);
    }
    50% {
        transform: translateX(-2560Px);
    }
    62.5% {
        transform: translateX(-3200Px);
    }
    75% {
        transform: translateX(-3840Px);
    }
    87.5% {
        transform: translateX(-4480Px);
    }
    100% {
        transform: translateX(-5120Px);
    }
}
.ghost{
    width: 640px;
    overflow: hidden;
    /*ce ci est une boite pour les images on a defini le width. le overflow:auto  permet d'addapter les images a la boite et leoverflow:hidden cache la bare de deffilement  */
    border: 3px double transparent ;
    margin-left: 30%;
    top: 35%;
}
body{
    margin-top: 0px;
    background-image:url(ville.JPG);
    height: 100vh;
    background-size: cover;
/* pour stopper la repetition */    
    background-position: center;
}
</style>