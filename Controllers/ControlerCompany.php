<?php

require 'models/modelCompany.php';

function search(){
    $users = getUsers();
    require 'Views/viewSearchCompany.php';

    <div class="table-results">
        <div class="table-item">
            <?php
            if($companies->rowCount() > 0){
                while($company = $companies->fetch()){
                    ?><a class="name"  href="https://fr.wikipedia.org/wiki/<?= $company['Nom'] ?>"><p><?= $company['Nom']; ?></p></a>
                    <p class="businness-sector"><?= $company['Secteur']; ?></p><?php
                }
            } else {
                ?><p>No results found</p><?php
            }
            ?>
        </div>
    </div>
}

?>