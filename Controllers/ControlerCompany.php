<?php

require 'E:\2EME ANNEE\PROJET 4 WEB\PROJET\Livrable 3\Stage-Sensor\models\modelCompany.php';

function search(){
    $resultQuery = searchCompanies();
    require 'E:\2EME ANNEE\PROJET 4 WEB\PROJET\Livrable 3\Stage-Sensor\Views\viewCompany\viewSearchCompany.php';
}

function create(){
    $resultQuery = createCompanies();
    require 'E:\2EME ANNEE\PROJET 4 WEB\PROJET\Livrable 3\Stage-Sensor\Views\viewCompany\viewModifyCompany.php';
}

function modify(){
    $resultQuery = modifyCompanies();
    require 'E:\2EME ANNEE\PROJET 4 WEB\PROJET\Livrable 3\Stage-Sensor\Views\viewCompany\viewModifyCompany.php';
}

function ModifyDatabase(){
    $resultQuery = doModifyDatabase();
    require 'E:\2EME ANNEE\PROJET 4 WEB\PROJET\Livrable 3\Stage-Sensor\Views\viewCompany\viewModifyCompany.php';
}

?>
