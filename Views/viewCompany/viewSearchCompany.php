<?php $titre = "Search Company"; ?>
<?php ob_start(); ?>
        <div class="espace1">
            <a class="retourMenu" href="../../homeMenu/homeMenu.html"> ← Home Menu </a>
        </div>
        <main class="main-content">
            <div class="center-input">
                <form method="get" class="input-search">   
                    <input type="text" name='search' id="search" placeholder="Look for a company" autocomplete="off">
                    <button type="submit" name="submit"><img src="../../../pictures/search_logo.png" for="search"></button>
                </form>
            </div>
            <h2 class="main-title">Database Results</h2>
            <div class="table">
                <h3 class="table-title">Name</h3>
                <h3 class="table-title">Businness sector</h3>
            </div>
            <!-- <div class="table-results">
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
            </div> -->
        </main>
<?php $contenu = ob_get_clean(); ?>
<?php require 'template.php' ?>