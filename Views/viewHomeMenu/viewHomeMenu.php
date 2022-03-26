<?php $titre = 'HomeMenu'; ?>
<?php ob_start(); ?>


<!-- Page body -->
<link rel="stylesheet" href="../../css/homeMenu/homeMenu.css">

<?php foreach ($lastoffers as $lastoffer): ?>
    <h1><?= $lastoffer['Titre'] ?></h1>
<?php endforeach; ?> 

<?php foreach ($users as $user): ?>
    <h1><?= $user['Titre'] ?></h1>
<?php endforeach; ?>

<!-- Page body -->

<?php $contenu = ob_get_clean(); ?>

<?php require 'template.php' ?>