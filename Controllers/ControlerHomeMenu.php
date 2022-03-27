<?php

//Call the model
require '../models/modelHomeMenu.php';

//
function homemenu(){
    $lastoffers = getLastoffers();
    require '../Views/viewHomeMenu/viewHomeMenu.php';
}


?>