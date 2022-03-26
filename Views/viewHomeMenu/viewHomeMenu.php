<?php $titre = "login"; ?>
<?php ob_start(); ?>

<!-- Page body -->
<link rel="stylesheet" href="css/logIn.css">

<?php foreach ($users as $user): ?>
    <h1><?= $user['Identifiant'] ?></h1>
<?php endforeach; ?>

<!-- Page body -->

<?php $contenu = ob_get_clean(); ?>
<?php require '../template.php' ?>
