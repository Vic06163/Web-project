<?php

require 'E:\2EME ANNEE\PROJET 4 WEB\PROJET\Livrable 3\Stage-Sensor\models\modelCompany.php';

function search(){
    $companiesSearch = getCompanies();
    require 'E:\2EME ANNEE\PROJET 4 WEB\PROJET\Livrable 3\Stage-Sensor\Views\viewCompany\viewSearchCompany.php';
}
    
?>
