<?php $titre = "Search Company"; ?>
<?php ob_start(); ?>
        <link rel="stylesheet" href="Stage-Sensor\css\company\searchCompany.css">
        <div class="espace1">
            <a class="retourMenu" href=""> ← Home Menu </a>
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
            
        </main>
<?php $contenu = ob_get_clean(); ?>
<?php require '../template.php' ?>