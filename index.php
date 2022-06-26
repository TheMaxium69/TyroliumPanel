<?php include "app/app.php"; navbar(0);?>

<main>

    <?php
    
    if (!empty($_SESSION['userIdLog'])){
        header("location: home.php");
    }


    if (empty($_POST['username']) && empty($_POST['password'])){

        form();

    } else {

        $TapeUsername = $_POST['username'];
        $TapePassword = $_POST['password'];

        $resultUser = getUser($TapeUsername);

        if ($resultUser != null){
            foreach( $resultUser as $value){
                $userId =  $value['id'];
                $userAlias =  $value['alias'];
                $userEmail = $value['email'];
                $vraiMotDePasse =  $value['password'];
                $userRole = $value['role'];
            }


            if ($TapePassword == $vraiMotDePasse){

                echo "valide";

                $_SESSION["userIdLog"]= $userId;
                $_SESSION["userNameLog"]= $userAlias;
                $_SESSION["userEmailLog"]= $userEmail;
                $_SESSION["userRoleLog"]= $userRole;
                header("location: home.php");


            } else {
                form("err");
            }


        } else {
            form("err");
        }

    }

    ?>

</main>

</body> </html>
