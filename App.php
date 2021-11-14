<?php

//navbar
require_once "component/nav.php";


//form connexion
if (empty($_POST['username']) && empty($_POST['password'])){
    require_once "component/form.php";
}

//form remplie
else{

    require_once "db.php";

    $formUsername = $_POST['username'];
    $formPassword = $_POST['password'];

    if ($username != $formUsername && $password != $formPassword){

        //Erreur de mdp ou id
        require_once "component/wrong.php";

    } else {
        //Panel

        //membre
        require_once "component/membre.php";

        echo "<hr>";

        //Nous Contactez
        require_once "component/contact.php";

    }
}