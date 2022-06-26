<?php
//Env
require_once "env.php";
if($APP_ENV == "DEV"){
    
    require_once "D:/xampp/htdocs/DB-tyroliumfguser.php";

    //Connexion
    $username = "maxime";
    $password = "maxime";
}
if($APP_ENV == "PROD"){
    require_once "/home/tyroliumfg/DB-membre.php";
    require_once "/home/tyroliumfg/DB-contact.php";
    require_once "/home/tyroliumfg/DB-admin.php";
}
