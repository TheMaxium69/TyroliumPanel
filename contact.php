<?php include "app/app.php"; navbar(6); ?>

<main>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php?logout=true">Connexion</a></li>
            <li class="breadcrumb-item"><a href="home.php">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
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

    <table class="container py-5">
        <h4 class="container">Page Contact</h4>
        <br>
        <div class="container" id="filter">
            <h5>Filtre :</h5>

            <div class="dropdown">
                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Prestation
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                    <a class="dropdown-item" href="?filter=presta">Toute</a>
                    <a class="dropdown-item" href="?filter=web">Site Web</a>
                    <a class="dropdown-item" href="?filter=mc">Minecraft</a>
                    <a class="dropdown-item" href="?filter=bot">Bot Discord</a>
                    <a class="dropdown-item" href="?filter=serv">Serveur</a>
                    <a class="dropdown-item" href="?filter=graph">Graphisme</a>
                    <a class="dropdown-item" href="?filter=music">Musicales</a>
                    <a class="dropdown-item" href="?filter=video">Vidéo/Animation</a>
                    <a class="dropdown-item" href="?filter=autre">Autre</a>
                </div>
            </div>


            <a href="?filter=projet" type="button" class="btn btn-primary">Projet</a>


            <a href="?filter=colab" type="button" class="btn btn-success">Collaboration</a>


            <a href="?filter=help" type="button" class="btn btn-warning">Aide/Bug</a>


            <a href="?filter=autre" type="button" class="btn btn-dark">Autre</a>


            <a href="?filter=archive" type="button" class="btn btn-info">Archives</a>

            <?php if (!empty($_GET['filter'])){ ?>
                <a href="?" type="button" class="btn btn-light">no-filtres</a>
            <?php } ?>

        </div>
        <br><br>
        <tr>
            <th scope="col">Ref</th>
            <th scope="col">Type</th>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Numéro</th>
            <th scope="col">Text</th>
            <th scope="col">Date</th>
            <th scope="col"></th>
        </tr>

        <?php

        $AllContact = getAllContact();

        foreach ($AllContact as $OneContact){


            if (!empty($_GET['filter'])){


                /*TOUT FILTRE SAUF ARCHIVE*/
                if ($_GET['filter'] != "archive"){

                    if ($OneContact['archive'] == 0){

                        /*PRESTA*/
                        if ($_GET['filter'] == "presta"){

                            if ($OneContact['raison'] == "*Prestations*"){
                                require "composant/show.php";
                            }

                        } else

                            /*PRESTA -> WEB*/
                            if ($_GET['filter'] == "web"){

                                if ($OneContact['prestation'] == "*Site Web*"){
                                    require "composant/show.php";
                                }

                            } else

                            /*PRESTA -> MUSIC*/
                            if ($_GET['filter'] == "music"){

                                if ($OneContact['prestation'] == "*Musicales*"){
                                    require "composant/show.php";
                                }

                            } else

                            /*PRESTA -> VIDEO*/
                            if ($_GET['filter'] == "video"){

                                if ($OneContact['prestation'] == "*Animations*"){
                                    require "composant/show.php";
                                }

                            } else

                            /*PRESTA -> AUTRE*/
                            if ($_GET['filter'] == "autre"){

                                if ($OneContact['prestation'] == "*Autre*"){
                                    require "composant/show.php";
                                }

                            } else

                            /*PRESTA -> MC*/
                            if ($_GET['filter'] == "mc"){

                                if ($OneContact['prestation'] == "*Minecraft*"){
                                    require "composant/show.php";
                                }

                            } else

                            /*PRESTA -> BOT*/
                            if ($_GET['filter'] == "bot"){

                                if ($OneContact['prestation'] == "*Bot Discord*"){
                                    require "composant/show.php";
                                }

                            } else

                            /*PRESTA -> SERV*/
                            if ($_GET['filter'] == "serv"){

                                if ($OneContact['prestation'] == "*Serveur*"){
                                    require "composant/show.php";
                                }

                            } else

                            /*PRESTA -> GRAPH*/
                            if ($_GET['filter'] == "graph"){

                                if ($OneContact['prestation'] == "*Graphisme*"){
                                    require "composant/show.php";
                                }

                            } else
                        /*PROJET*/
                        if ($_GET['filter'] == "projet"){

                            if ($OneContact['raison'] == "*Projets*"){
                                require "composant/show.php";
                            }

                        } else

                        /*COLAB*/
                        if ($_GET['filter'] == "colab"){

                            if ($OneContact['raison'] == "*Colaboration*"){
                                require "composant/show.php";
                            }

                        } else

                        /*AIDE BUG*/
                        if ($_GET['filter'] == "help"){

                            if ($OneContact['raison'] == "*Aide/Bug*"){
                                require "composant/show.php";
                            }

                        } else

                        /*AUTRE*/
                        if ($_GET['filter'] == "autre"){

                            if ($OneContact['raison'] == "*Autre*"){
                                require "composant/show.php";
                            }

                        } else {

                            /*TOUT (SI FILTER EST REMPLIE AVEC DLA MERDE)*/
                            if ($OneContact['archive'] == 0){
                                require "composant/show.php";
                            }

                        }

                    }

                /*ARCHIVE*/
                } else {

                    if ($OneContact['archive'] == 1){
                        require "composant/show.php";
                    }

                }

            } else {

                /*TOUT*/
                if ($OneContact['archive'] == 0){
                    require "composant/show.php";
                }

            }






        
        
        }
        ?>
    </table>

<br>

</main>

</body> </html>