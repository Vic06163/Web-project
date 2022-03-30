<?php $titre = "Stage Sensor | Login"; ?>
<?php ob_start(); ?>
<link rel="stylesheet" href="views/css/login.css">
<div class="mainbody">
    <div class="page">
        <div class="corp">
            <header>
                <div class="logo">
                    <img src="views/pictures/Logo_company.png" alt="STAGE SENSOR corporate logo" width="700px">
                </div>
            </header>
            <div class="welcome">
                <h2>Welcome!</h2>
            </div>
            <div class="Internship">
                <h3>Find an internship with Stage sensor</h3>
            </div>
            <form action="controllers/controllerLogin.php" method="POST" class="form1">
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
<?php $contenu = ob_get_clean(); ?>
<?php require 'template/templateFooter.php';?>