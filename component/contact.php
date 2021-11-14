<br>
        <table class="container py-5">
            <h4 class="container">Nous Contactez (Footer)</h4>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </tr>
            <?php 
            $reqContact = "SELECT * FROM contact";
            $allContact = mysqli_query($contactConnectDB, $reqContact);
            foreach ($allContact as $contact){ ?>
                    <tr>
                        <td><?php echo $contact['name'] ?></td>
                        <td><?php echo $contact['email'] ?></td>
                    </tr>
                <?php } ?>
        </table>