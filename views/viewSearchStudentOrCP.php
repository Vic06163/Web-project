<?php $titre = "Stage Sensor | Search"; ?>
<?php ob_start(); ?>
<link rel="stylesheet" href="../views/css/searchStudentOrCP.css">
<div class="espace1">
    <a class="retourMenu" href="../../views/viewHome.php"> ← Home </a>
</div>
<main class="main-content">
    <div class="center-input">
        <form method="get" class="input-search">   
            <input value="" type="text" name='search' id="search" placeholder="Search with last name" autocomplete="off">
            <button type="submit" name="submit"><img src="../views/pictures\search_logo.png" for="search"></button>
        </form>
    </div>
    <h2 class="main-title">Database Results</h2>
    <div class="table">
        <h3 class="table-title">Last Name</h3>
        <h3 class="table-title">First Name</h3>
        <h3 class="table-title">Campus</h3>
        <h3 class="table-title">Class</h3>
    </div>
    <div class="table-results">
        <div class="table-item">
            <?php
                if($StudentsSearch->rowCount() > 0){
                    while($cs = $StudentsSearch->fetch()){
                        ?><p><?= $cs['Nom']; ?></p>
                        <p><?= $cs['Prenom']; ?></p>
                        <p><?= $cs['Centre']; ?></p>
                        <p><?= $cs['Promotion']; ?></p>
                        
                        <?php
                        /* if($StudentsSearch->rowCount() = 0){
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