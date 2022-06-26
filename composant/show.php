<tr>
    <td><?php echo "#" . ($OneContact['id'] + 1000); ?></td>
    <td><?php

        if ($OneContact['raison'] == "*Prestations*"){

            echo badge("danger", "Prestation");

            echo badge("info", substr($OneContact['prestation'], 1, -1), 2);

            if ($OneContact['prestation'] == "*Site Web*"){

                echo badge("secondary", substr($OneContact['web'], 1, -1), 2);

            } else if ($OneContact['prestation'] == "*Minecraft*"){

                echo badge("secondary", substr($OneContact['mc'], 1, -1), 2);

            }

        } else if ($OneContact['raison'] == "*Projets*"){

            echo badge("primary", "Projets");

            echo badge("secondary", substr($OneContact['projet'], 1, -1), 2);

        } else if ($OneContact['raison'] == "*Colaboration*"){

            echo badge("success", "Collaboration");

        } else if ($OneContact['raison'] == "*Aide/Bug*"){

            echo badge("warning", "Aide/Bug");

        } else if ($OneContact['raison'] == "*Autre*"){

            echo badge("dark", "Autre");

        } else {

            echo badge("dark", "Null");

        }

        if ($OneContact['archive'] == 1){

            echo badge("light", "archive", 2);

        }


        ?></td>
    <td><?php echo $firstName = substr($OneContact['firstName'], 1, -1); ?></td>
    <td><?php echo $lastName = substr($OneContact['lastName'], 1, -1); ?></td>
    <td><?php echo $email = substr($OneContact['email'], 1, -1); ?></td>
    <td><?php echo $phone = substr($OneContact['phoneNumber'], 1, -1); ?></td>
    <td><?php echo $content = substr($OneContact['content'], 1, -1); ?></td>
    <td><?php echo $OneContact['createdAt']; ?></td>
    <td><a href="?del=<?php echo $OneContact['id']; ?>"><i class="fas fa-trash"></i></a><a href="mailto:<?php echo $email = substr($OneContact['email'], 1, -1); ?>"><i class="fas fa-reply"></i></a></td>
</tr>