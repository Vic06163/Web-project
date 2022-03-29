<?php $titre = "Stage Sensor"; ?>
<?php ob_start(); ?>

<!-- Page body -->
<link rel="stylesheet" href="css/test.css">

<?php foreach ($userinfos as $userinfo): ?>
    <h2><?= $userinfo['Nom'] ?></h2>
    <h2><?= $userinfo['Prenom'] ?></h2>
    <h2><?= $userinfo['Centre'] ?></h2>
    <h2><?= $userinfo['Promotion'] ?></h2>
    
<?php endforeach; ?>

<!-- Page body -->

<?php $contenu = ob_get_clean(); ?>
<?php require "template.php" ?>