<?php

//Call the model
require 'models/modelLogin.php';

function login(){
    $users = getUsers();
    require 'Views/viewLogin/viewLogin.php';
}

?>

