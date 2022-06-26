<?php include "app/app.php"; navbar(3); ?>

<main>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php?logout=true">Connexion</a></li>
            <li class="breadcrumb-item"><a href="home.php">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Membre</li>
        </ol>
    </nav>

    <?php

    if (empty($_SESSION['userIdLog'])){
        header("location: index.php");
    }

    if (!empty($_GET['del'])){
        $idUser = $_GET['del'];
        delUser($idUser);
    }

    if (!empty($_POST['alias']) && !empty($_POST['email']) && !empty($_POST['password']) && $_SESSION['userRoleLog'] == "admin"){
        createUser($_POST['alias'], $_POST['email'], $_POST['password']);
    }

    ?>

    <table class="container py-5">
        <h4 class="container">Compte du panel</h4>
        <tr>
            <th scope="col">Alias</th>
            <th scope="col">Identifiant</th>
            <th scope="col">Mots de passe</th>
            <th scope="col">Rôles</th>
            <th scope="col"></th>
        </tr>

        <?php

        $AllUsers = getAllUser();

        foreach ($AllUsers as $User){

            if($User['id'] != 1){

            ?>
            <tr>
                <td><?php echo $User['alias']; ?></td>
                <td><?php echo $User['email']; ?></td>
                <td>•••••••••••••••••••••</td>
                <td><?php
                    if ($User['role'] == "admin"){

                        echo '<span class="badge badge-danger">Admin</span>';

                    } else if ($User['role'] == "membre"){

                        echo '<span class="badge badge-success">Membre</span>';

                    } else {

                        echo '<span class="badge badge-dark">Erreur</span>';

                    }
                    ?></td>
                <?php
                if ($User['id'] == $_SESSION['userIdLog'] || $_SESSION['userRoleLog'] != "admin"){ ?>
                    <td><a class="disabled" aria-disabled="true"><i class="fas fa-ban"></i></a></td>
                <?php } else { ?>
                    <td><a href="?del=<?php echo $User['id']; ?>"><i class="fas fa-trash"></i></a></td>
                <?php } ?>
            </tr>

            <?php

            }
        }
        ?>
    </table>


    <?php if ($_SESSION['userRoleLog'] == "admin") { ?>

    <div class="container py-5">

        <h4>Création de compte</h4>

        <form method="POST">

            <form>
                <div class="form-group">
                    <label>Nom du compte</label>
                    <input type="text" class="form-control" name="alias" required>
                    <small class="form-text text-muted">Il s'agit d'un sans importance</small>
                </div>
                <div class="form-group">
                    <label>Adresse Email</label>
                    <input type="text" class="form-control" name="email" required>
                    <small class="form-text text-muted">Il s'agit de l'identifiant de connexion</small>
                </div>
                <div class="form-group">
                    <label>Mot de passe</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" required>
                    <label class="form-check-label">Tu accepte avoir consciense que ce compte aura tout les acces du site</label>
                </div>
                <button type="submit" class="btn btn-primary">Envoyé</button>
            </form>


        </form>

    </div>

    <?php } ?>




</main>


</body> </html>