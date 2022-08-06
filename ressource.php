<?php include "app/app.php"; navbar(7); ?>

<main>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php?logout=true">Connexion</a></li>
            <li class="breadcrumb-item"><a href="home.php">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ressource</li>
        </ol>
    </nav>

    <?php

    if (empty($_SESSION['userIdLog'])){
        header("location: index.php");
    }

    if (!empty($_GET['del'])){
        $idContact = $_GET['del'];
        delContact($idContact);
    }

    ?>

    <div class="container py-5">
        <h4 class="container">Page Ressource</h4>
        <br>  
    </div>
        
        <ul id="albumfotos">
            
            <?php 

            $path = "https://tyrolium.fr/Contenu/Image/";
            $scandir = scandir("../Contenu/Image/");
            $i = 0;

            foreach($scandir as $fichier){
                
                $size = 0;
                $i = $i + 1;
            
                echo '<li id="foto'. $i .'"><a href="' . $path . $fichier .'">'. $fichier .'</a></li>';
                
            
                $size = getimagesize($path . $fichier);
                
                ?>
            
                <style>

                ul#albumfotos li#foto<?= $i ?>{
                  background-image:url(<?= $path . $fichier ?>);
                  background-position:50% 50%;
                  background-size:400px 400px;
                  background-color: #ffffff;
                }
                ul#albumfotos li#foto<?= $i ?>:hover{
                  background-position:0px 0px;
                  background-size: unset;
                    width: <?= $size[0] ?>px;
                    height: <?= $size[1] ?>px;

                }

                </style>


                <?php
    
            }
        
            ?>    
            
            
            
        </ul>

        
<br>

</main>

</body> </html>