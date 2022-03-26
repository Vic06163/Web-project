<?php

//Call the model
require '../models/modelHomeMenu.php';

//
/* function login(){
    $users = getUsers();
    require 'views/viewLogin.php';
} */

function homemenu(){
    $lastoffer = getLastoffer();
    require '../Views/viewHomeMenu/viewHomeMenu.php';
}

?>