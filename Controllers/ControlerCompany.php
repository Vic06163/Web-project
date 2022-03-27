<?php

require 'E:\2EME ANNEE\PROJET 4 WEB\PROJET\Livrable 3\Stage-Sensor\models\modelCompany.php';

function search(){
    $companiesSearch = searchCompanies();
    require 'E:\2EME ANNEE\PROJET 4 WEB\PROJET\Livrable 3\Stage-Sensor\Views\viewCompany\viewSearchCompany.php';
}

function create(){
    $test = createCompanies();
    require 'E:\2EME ANNEE\PROJET 4 WEB\PROJET\Livrable 3\Stage-Sensor\Views\viewCompany\viewModifyCompany.php';
}
    
?>
