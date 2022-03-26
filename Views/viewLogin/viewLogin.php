<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="css/login/login.css">
</head>
<body>
    <div class="mainbody">
        <div class="page">
            <div class="corp">
                <header>
                    <div class="logo">
                        <img src="pictures/Logo_company.png" alt="STAGE SENSOR corporate logo" width="700px">
                    </div>
                </header>
                <div class="welcome">
                    <h2>Welcome!</h2>
                </div>
                <div class="Internship">
                    <h3>Find an internship with Stage sensor</h3>
                </div>
                <form action="Views/login/login.php" method="POST" class="form1">
                    <?php
                    if(isset($_GET['error'])){
                        ?><p class="error"><?php echo($_GET['error']) ?></p><?php
                    }
                    ?>
                    <div class="e-mailtextbox">
                        <h4>Enter username</h4>
                        <input type="text" id="e-mail" name='username'>
                    </div>
                    <div class="passwordtextbox">
                        <h4>Enter password</h4>
                        <input type="password" id="password" name='password'>
                    </div>
                    <div class="signinbutton">
                        <input class="signin" type="submit" name='submit' value="Sign In">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="footertop">
            <div class="texttop">
                <p>Find the best internship with Stage sensor !</p>
            </div>
            <div class="footersocials">
                <p class="footersocialsstuff">Find us on social media:</p>
                <a class="footersocialsstuff" href="https://www.linkedin.com/in/stage-sensor/"><img src="pictures/logo_linkedin.png" height="30px" width="30px"></a>
                <a class="footersocialsstuff" href="https://www.instagram.com/stagesensor/"><img src="pictures/logo_instagram.png" height="30px" width="30px"></a>
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



















