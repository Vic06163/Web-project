<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!-- Adapter la page a différentes tailles d'écran -->
        <link rel="stylesheet" href="../css/template.css">
        
        <title><?= $titre ?></title>
        <script src="https://kit.fontawesome.com/ab00dd9f8c.js" crossorigin="anonymous"></script>   
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   <!-- Gérer les compatibilités entre les différents navigateurs -->
    </head>
    <body>
        <div class="mainbody">
            <header>
                <a class="logoCompany" href=""><img src="../pictures/Logo_company.png"></a>
            </header>
            <div>
                <?= $contenu ?>
            </div>
        </div>
            <footer>
                <div class="footertop">
                    <div class="texttop">
                        <p>Find the best internship with Stage sensor !</p>
                    </div>
                    <div class="footersocials">
                        <p class="footersocialsstuff">Find us on social media:</p>
                        <a class="footersocialsstuff" href="https://www.linkedin.com/in/stage-sensor/"><img src="../pictures/logo_linkedin.png" height="30px" width="30px"></a>
                        <a class="footersocialsstuff" href="https://www.instagram.com/stagesensor/"><img src="../pictures/logo_instagram.png" height="30px" width="30px"></a>
                    </div>
                    <div class="footerbottom">
                        <a class="footerbottomtext" href="footerPages/gethelp.html">Get help</a>
                        <a class="footerbottomtext" href="footerPages/termsofuse.html">Terms of Use</a>
                        <a class="footerbottomtext" href="footerPages/privacypolicy.html">Privacy policy</a>
                        <a class="footerbottomtext" href="footerPages/legalmentions.html">Legal mentions</a>
                    </div>
                </div>
            </footer>
    </body>
</html>

