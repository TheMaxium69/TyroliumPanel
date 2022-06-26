<?php

require "./composant/head.phtml";
require "function.php";
require "env.php";

session_start();

if (!empty($_GET['logout'])){
    session_unset();
}

