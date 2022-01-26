<br>
        <table class="container py-5">
            <h4 class="container">Nous Contactez (Footer)</h4>
            <tr>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Numéro</th>
                <th scope="col">Text</th>
            </tr>
            <?php 
            $reqContact = "SELECT * FROM contact";
            $allContact = mysqli_query($contactConnectDB, $reqContact);
            foreach ($allContact as $contact){ ?>
                    <tr>
                        <td><?php echo $firstName = substr($contact['firstName'], 1, -1); ?></td>
                        <td><?php echo $lastName = substr($contact['lastName'], 1, -1); ?></td>
                        <td><?php echo $email = substr($contact['email'], 1, -1); ?></td>
                        <td><?php echo $phoneNumber = substr($contact['phoneNumber'], 1, -1); ?></td>
                        <td><?php echo $content = substr($contact['content'], 1, -1); ?></td>
                    </tr>
                <?php } ?>
        </table>