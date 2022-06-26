<tyroapp-membre>
    <br>
        <table class="container py-5">
            <h4 class="container">Membre</h4>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Role</th>
            </tr>
        <?php 
        $reqMembre = "SELECT * FROM membre";
        $allMembre = mysqli_query($ConnectDB, $reqMembre);
        foreach ($allMembre as $membre){ ?>
            <tr>
                <td><?php echo $membre['name'] ?></td>
                <td><?php 
                if ($membre['role'] == 1){
                    echo "Directeur-Fondateur";
                }if ($membre['role'] == 2){
                    echo "Directeur-Adjoint";
                }if ($membre['role'] == 3){
                    echo "Chef de Projet";
                }if ($membre['role'] == 4){
                    echo "Membre";
                }if ($membre['role'] == 5){
                    echo "Modérateur";
                }if ($membre['role'] == 6){
                    echo "Assistant";
                }?></td>
            </tr>
        <?php } ?>
        </table>
</tyroapp-membre>         