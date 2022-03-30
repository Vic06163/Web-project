<?php

//Call the model
require '../model/modelHome.php';

//
function Offer(){
    $lastoffer = getLastoffer();
    return $lastoffer;
}

function Company(){
    $company = getCompanyOffre();
    return $company;
}
?>