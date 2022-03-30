<?php

require '..\model\modelSearchCompany.php';

function Companies(){
    $companiesSearch = searchCompanies();
    require '../views/viewSearchCompany.php';
}

Companies();

?>