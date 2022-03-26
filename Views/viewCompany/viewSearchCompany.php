<?php $titre = "Search Company"; ?>
<?php ob_start(); ?>
<link rel="stylesheet" href="..\..\css\company\searchCompany.css">
<div class="espace1">
    <a class="retourMenu" href=""> ← Home Menu </a>
</div>
<?php foreach($companiesSearch as $yes): ?>
    <h1><?= $yes['Nom']?></h1>
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>
<?php require '../template.php'; ?>