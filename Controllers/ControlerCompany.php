<?php

require '../models/modelCompany.php';

function search(){
    $companiesSearch = getCompanies();
    require '../Views/viewSearchCompany.php';
}
    
?>
