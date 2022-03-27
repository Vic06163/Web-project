<?php $titre = "Search Company"; ?>
<?php ob_start(); ?>
<link rel="stylesheet" href="..\css\company\SearchCompany.css">
<div class="espace1">
    <a class="retourMenu" href=""> ← Home Menu </a>
</div>
<?php foreach($companiesSearch as $yes): ?>
    <h1><?= $yes['Nom']?></h1>
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>
<?php require 'E:\2EME ANNEE\PROJET 4 WEB\PROJET\Livrable 3\Stage-Sensor\Views\template.php'; ?>