<?php

require '../model/modelCreateModifyEditCompany.php';

function ModifyDatabase(){
    $resultQuery = doModifyDatabase();
    require '../views/viewCreateModifyEditCompany.php';
}

ModifyDatabase();
?>