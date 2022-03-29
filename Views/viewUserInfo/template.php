<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!-- Adapter la page a différentes tailles d'écran -->
        <link rel="stylesheet" href="../css/template.css">
          <!-- Chrome --> 
        <link rel="icon" sizes="192x192" href="icon.png"><link rel="apple-touch-icon" href="ios-icon.png">
  <!-- Safari --> 
        <link rel="apple-touch-startup-image" href="icon.png">
  <!-- IE --> 
        <meta name="msapplication-square310x310logo" content="icon_largetile.png"> 
  <!-- Chrome --> 
        <meta name="theme-color" content="#4285f4"> 
  <!-- Safari --> 
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <link rel="manifest" href="../Manifest.json">
        <link rel="manifest" href="manifest.json">
        <script>
        if('serviceWorker' in navigator){
            navigator.serviceWorker.register('ServiceWorker.js')
            .then((sw)=>console.log('ServiceWorker registration successful with scope', sw))
            .catch((err)=>console.log('ServiceWorker registration failed', err));
        }
        </script>
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

