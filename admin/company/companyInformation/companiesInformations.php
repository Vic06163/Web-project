<?php
$bdd = new PDO('mysql:host=localhost:3307;dbname=stagesensor', 'root', '');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">                                                   <!-- Gérer les compatibilités entre les différents navigateurs -->
    <title>Companies Information</title>
    <link rel="stylesheet" type="text/css" href="companiesInformation.css">
    <link rel="icon" href="../../../pictures/Logo_page_web.png">
</head>

<body>
    <main class="mainclass">
    <header>
        <a class="logoCompanyLink" href="../../homeMenu/homeMenu.html" ><img class="logoCompany" src="../../../pictures/Logo_company.png" alt="STAGE SENSOR corporate logo"></a>
        <div class="headerDroite">
            <a class="nomPrenom">Nom</a>
            <a class="nomPrenom">Prenom</a>
            <input class="profileButton" type="image" id="image" alt="Profile" src="../../../pictures/Logo_login.png">
        </div>
    </header> 

    <!--<div class="ecran">-->
    <div class="espace1">
        <a style="text-decoration:none" class="retourMenu" href="../../homeMenu/homeMenu.html"> ← Home Menu </a>
    </div>
    <div class="espace2">
        <div class="maps">
            <div class="mapimageflex"><a href="https://www.google.fr"><input class="mapimage"  type="image" id="image" src="../../../pictures/maps_logo.png" alt="Logo maps"/></a></div>
            <a class="textinfo">Adresse random</a>
        </div>
        <div class="stonks">
            <div class="stonksimageflex"><input class="stonksimage" type="image" id="image" src="../../../pictures/graph.png" alt="Graph"/></div>
            <a class="textinfo">Stonks random</a>
        </div>
    </div>
    <div class="espace3">
        <div class="infocompany"><p>Voici les infos de l'entreprise</p></div>
        <div class="rating">
            <div class="ratingstar"><img src="../../../pictures/star.png" alt="Rating star" height="80%"></div>
            <h class="ratingtext">le swag de l'entreprise, noté en étoiles de swag</h>
        </div>
    </div>
    <div class="espace4">
        <div class="sousdiv">
            <div class="statname"><p>Number of employees</p></div>
            <div class="statname2"><p>Creation of the company</p></div>
            <div class="statname"><p>Number of clients</p></div>
            <div class="statname2"><p>Number of CESI students hired</p></div>
        </div>
        <div class="sousdiv">
            <div class="statvalue2">
                <p>
                </p>
            </div>
            <div class="statvalue">
                <p></p>   
            </div>
            <div class="statvalue2">
                <p></p>
            </div>
            <div class="statvalue">
                <p></p>
            </div>
        </div>
    </div>

    <?php $employeesnb = $bdd->query("SELECT Nombre_employe FROM entreprise");
                    echo $employeesnb; ?>
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
                <a class="footerbottomtext" href="../../../footerPages/privacypolicy.html">Stage Sensor Privacy policy</a>
                <a class="footerbottomtext" href="../../../footerPages/legalmentions.html">Legal mentions</a>
            </div>
        </div>
    </footer>
</body>

</html>