<?php
if(!empty($_GET) && !empty($_GET['search'])){
    try{
        $bdd = new PDO('mysql:host=localhost:3307;dbname=stagesensor', 'root', 'root');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $bdd->exec('SET NAMES utf8');
    
        $req = $bdd->prepare('SELECT Nom, Secteur_activite FROM Entreprise WHERE Nom LIKE :search ORDER BY ID_entreprise ASC');
        $req = $bdd->blindValue(':search', '%'.strip_tags($_POST['search']).'%', PDO::PARAM_STR);
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        
        if(count($data) > 0)
        {
            foreach( $data AS $data )
                echo htmlspecialchars($data->Nom);
        }
        else echo 'Aucun résultat';
    } catch(PDOExeption $e){
        die('Erreur'.$e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">                                  <!-- Adapter la page a différentes tailles d'écran -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">                                                   <!-- Gérer les compatibilités entre les différents navigateurs -->
    <title>Stage Sensor</title>
    <link rel="stylesheet" type="text/css" href="searchCompany.css"> 
</head>
<body>
    <header>
        <a class="logoCompany" href="../../homeMenu/homeMenu.html"><img src="../../../pictures/Logo_company.png"></a>
        <div class="headerDroite">
            <a class="nomPrenom">Nom</a>
            <a class="nomPrenom">Prenom</a>
            <a class="profileButton" href="../../userInformations/userInformations.html"><img src="../../../pictures/Logo_login.png"></a>
        </div>
    </header>
    <div class="espace1">
        <a class="retourMenu" href="../../homeMenu/homeMenu.html"> ← Search a company </a>
    </div>
    <main class="main-content">
        <div class="center-input">
            <form method="get" class="input-search">   
                <input type="text" name='search' id="search" placeholder="Look for a company">
                <button type="submit" name="submit"><img src="../../../pictures/search_logo.png" for="search"></button>
            </form>
        </div>
        <h2 class="main-title">Database Results</h2>
        <div class="table">
            <h3 class="table-title">Name</h3>
            <h3 class="table-title">Businness sector</h3>
        </div>
        <div class="table-results">
            <div class="table-item">
                <p class="name">Test</p>
                <p class="businness-sector">Test</p>
            </div>
        </div>
    </main>
    <footer>
        <div class="footertop">
            <div class="texttop">
                <p>Find the best internship with Stage sensor !</p>
            </div>
            <div class="footersocials">
                <p class="footersocialsstuff">Find us on social media:</p>
                <a class="footersocialsstuff" href="https://www.linkedin.com/in/stage-sensor/"><img src="../../../pictures/logo_linkedin.png" height="30px" width="30px"></a>
                <a class="footersocialsstuff" href="https://www.instagram.com/stagesensor/"><img src="../../../pictures/logo_instagram.png" height="30px" width="30px"></a>
            </div>
            <div class="footerbottom">
                <a class="footerbottomtext" href="../../../footerPages/gethelp.html">Get help</a>
                <a class="footerbottomtext" href="../../../footerPages/termsofuse.html">Terms of Use</a>
                <a class="footerbottomtext" href="../../../footerPages/privacypolicy.html">Privacy policy</a>
                <a class="footerbottomtext" href="../../../footerPages/legalmentions.html">Legal mentions</a>
            </div>
        </div>
    </footer>
    <script src="searchCompany.js"></script>
</body>
</html>