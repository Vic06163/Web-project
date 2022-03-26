<?php $titre = "login"; ?>
<?php ob_start(); ?>
<?php foreach ($users as $user): ?>
    <h1><?= $user['Identifiant'] ?></h1>
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>
<?php require 'template.php' ?>

