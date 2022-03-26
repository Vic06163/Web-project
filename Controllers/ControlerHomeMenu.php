<?php

//Call the model
require '../models/modelHomeMenu.php';

//
function homemenu(){
    $users = getUsers();
    $lastoffers = getLastoffers();
    require '../Views/viewHomeMenu/viewHomeMenu.php';
}



?>