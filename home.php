<?php include "app/app.php"; navbar(1); ?>

<main>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php?logout=true">Connexion</a></li>
            <li class="breadcrumb-item active" aria-current="page">Accueil</li>
        </ol>
    </nav>


    <?php

    if (empty($_SESSION['userIdLog'])){
        header("location: index.php");
    }

    ?>


    <h1 style="text-align: center">Bienvenue <?php echo $_SESSION['userNameLog']?></h1>
    <br>



<hr>

    <!-- PC -->
    <div class="home-desktop">

        <section id="service-second" class="container row">
            <div class="col-6" style="text-align: end">
                <img class="img-home" src="assets/_Digital%20content_Monochromatic.png" style="width: 67%">
            </div>
            <div class="container col-5">
                <article id="art-home">
                    <h2 class="art">Page Contact</h2>
                    <p class="art">
                        <br><br>
                        Cette categorie permet à tout le staff de tyrolium, d'accedez a tout les demande client, ou de partenaire, de aide ou de bug et plein de chose, vous pouvez utiliser le system de filtre et si cela est pertinent l'envoyé grace a la ref, et l'archiver si il n'est pas utile.
                        <br><br>
                    </p>
                    <div style="text-align: center">
                        <a class="btn btn-primary" href="contact.php">Accedez au Contacte</a>
                    </div>
                </article>
            </div>
        </section>
<br><br>
        <section id="service-second-but" class="container row">
            <div class="container col-5">
                <article>
                    <h2 class="art">Page Membre</h2>
                    <p class="art">

                        <br><br>
                        Cette page permet de voir les comptes de tout les membres,<br> et pour l'admine (Maxime LE DIEU) de les modifier et d'en créer

                        <br><br>
                    </p>
                    <div style="text-align: center">
                        <a class="btn btn-primary" href="user.php">Accedez au Membre</a>
                    </div>
                </article>
            </div>
            <div class="col-6">
                <img class="img-home" src="assets/Analytics%20team_Monochromatic.png" style="width: 75%;margin-top: -36px;">
            </div>
        </section>

    </div>

    <!-- MOBILE -->

    <div class="home-res">

        <section id="service-second">
            <h2>Page Contact</h2>
            <p>
                Cette categorie permet à tout le staff de tyrolium, d'accedez a tout les demande client, ou de partenaire, de aide ou de bug et plein de chose, vous pouvez utiliser le system de filtre et si cela est pertinent l'envoyé grace a la ref, et l'archiver si il n'est pas utile.</p>
            <div>
                <div class="" style="width: 60%; margin-left: 20%">
                    <img src="assets/_Digital%20content_Monochromatic.png" width="100%" height="100%">
                </div>
            </div>
            <br>
            <a class="btn btn-primary" href="contact.php">Accedez au Contacte</a>

        </section>

        <br><br>

        <section id="service-second-but">
            <h2>Page Membre</h2>
            <p>
                Cette page permet de voir les comptes de tout les membres, et pour l'admine (Maxime LE DIEU) de les modifier et d'en créer
            </p><div>
                <div class="" style="width: 60%; margin-left: 20%">
                    <img src="assets/Analytics%20team_Monochromatic.png" width="100%" height="100%">
                </div>
            </div>
            <br>

            <a class="btn btn-primary" href="user.php">Accedez au Membre</a>

        </section>



    </div>

<br>








</main>


</body> </html>