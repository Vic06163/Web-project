<?php $titre = "Stage Sensor"; ?>
<?php ob_start(); ?>

<!-- Page body -->
<link rel="stylesheet" href='../css/userInfo/userInfo.css'>
<section class="homemenubtn">
<a href="homemenu.php">Test</a>

</section>

<section class="userinformation">
<?php foreach ($userinfos as $userinfo): ?>
    <h1>Personal Information</h1>
<div class="alr">
    <h2>Nom : <?= $userinfo['Nom'] ?></h2>
    <h2>Prénom : <?= $userinfo['Prenom'] ?></h2>
</div>
<div class="alr">
    <h2>Centre : <?= $userinfo['Centre'] ?></h2>
    <h2>Promotion : <?= $userinfo['Promotion'] ?></h2>
</div>
<?php endforeach; ?>
</section>
<!-- Page body -->

<?php $contenu = ob_get_clean(); ?>
<?php require "template.php" ?>