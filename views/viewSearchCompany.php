<?php $titre = "Stage Sensor | Search company"; ?>

<?php ob_start(); ?>
<link rel="stylesheet" href="../views/css/searchCompany.css">
<div class="espace1">
    <a class="retourMenu" href="../../views/viewHome.php"> ← Home </a>
</div>
<main class="main-content">
    <div class="center-input">
        <form method="get" class="input-search">   
            <input value="" type="text" name='search' id="search" placeholder="Look for a company" autocomplete="off">
            <button type="submit" name="submit"><img src="../views/pictures\search_logo.png" for="search"></button>
        </form>
    </div>
    <h2 class="main-title">Database Results</h2>
    <div class="table">
        <h3 class="table-title">Name</h3>
        <h3 class="table-title">Businness sector</h3>
    </div>
    <div class="table-results">
        <div class="table-item">
            <?php
                if($companiesSearch->rowCount() > 0){
                    while($cs = $companiesSearch->fetch()){
                        ?><a class="name" href="https://fr.wikipedia.org/wiki/<?= $cs['Nom'] ?>"><p><?= $cs['Nom']; ?></p></a>
                        <p><?= $cs['Secteur']; ?></p><?php
                        /* if($companiesSearch->rowCount() = 0){
                            break;
                        } */
                    }
                } else {
                    ?><p>No results found</p><?php
                }
                ?>
        </div>
    </div>
</main>
<?php $contenu = ob_get_clean(); ?>
<?php require 'template/template.php';