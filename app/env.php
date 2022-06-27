<?php

//DEV or PROD

$env = "DEV";

if ($env == "DEV"){
    require "D:/xampp/htdocs/DB-tyroliumfguser.php";
} else if ($env == "PROD"){
    require "/home/tyroliumfg/DB-tyroliumfguser.php";
}