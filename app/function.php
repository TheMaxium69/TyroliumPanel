<?php


/* Général */

function form($isWonk = null){

    if ($isWonk){
        echo "louper";
    }

    ?>

    <div class="container py-5">
        <form method="POST">
            <div class="mb-3">
                <label for="usernameInput" class="form-label">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="usernameInput" name="username">
            </div>
            <div class="mb-3">
                <label for="passwordInput" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="passwordInput" name="password">
            </div>
            <br>
            <button type="submit" class="btn btn-primary" style="width: 100%">Se Connecter</button>
        </form>
    </div>

    <?php
}

function navbar($page){
    require "composant/navbar.phtml";
}

function badge($color, $text, $type = null){
    if ($type == 2){
        return '<span class="badge badge-pill badge-'. $color .'">'. $text .'</span>';
    } else {
        return '<span class="badge badge-'. $color .'" style="width: 100%; font-size: 14px;">'. $text .'</span>';
    }
}
/************
 *
 * @model
 * USER
 *
 ************/


function getAllUser(){

    require "env.php";

    $requestNews = "SELECT * FROM users";

    $allUser = mysqli_query($ConnectDB, $requestNews);

    return $allUser;

}

function getUser($email){

    require "env.php";

    $requestNews = "SELECT * FROM users WHERE email = '$email'";

    $resultUser = mysqli_query($ConnectDB, $requestNews);

    if($resultUser->num_rows == 1){

        return $resultUser;

    } else {
        return null;
    }

}

function delUser($idUser){

    require "env.php";

    $requestIsValide = "SELECT * FROM users WHERE id = '$idUser'";

    $isIdValide = mysqli_query($ConnectDB, $requestIsValide);

    if($isIdValide->num_rows == 1){

        $requestDelete = "DELETE FROM users WHERE id ='$idUser'";

        mysqli_query($ConnectDB, $requestDelete);

    }

}

function createUser($alias, $email, $password){

    require "env.php";

    $requestIsValide = "SELECT * FROM users WHERE email = '$email'";

    $isIdValide = mysqli_query($ConnectDB, $requestIsValide);

    if($isIdValide->num_rows == 0){

        $requestCreate = "INSERT INTO users(alias, email, password) VALUES ('$alias', '$email', '$password')";

        mysqli_query($ConnectDB, $requestCreate);

    }

}

/************
 *
 * @model
 * CONTACT
 *
 ************/

function getAllContact(){

    require "env.php";

    $request = "SELECT * FROM contact";

    $allContact = mysqli_query($ConnectDB, $request);

    return $allContact;

}

function delContact($idContact){

    require "env.php";

    $requestIsValide = "SELECT * FROM contact WHERE id = '$idContact'";

    $isIdValide = mysqli_query($ConnectDB, $requestIsValide);

    if($isIdValide->num_rows == 1){

        $requestDelete = "UPDATE contact SET archive = '1' WHERE id = '$idContact'";

        mysqli_query($ConnectDB, $requestDelete);

    }

}
