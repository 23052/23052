
       <?php 
        //on va detruire les session lorsque le user va se deconnecter 
        session_start();
        //on stoque les session dans le tableau
        $_SESSION=array();
        session_destroy();
        header('Location:premier.php');
        ?>