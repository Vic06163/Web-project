<?php

//Call the model
require 'models/Model.php';

//
function login(){
    $users = getUsers();
    require 'views/viewLogin.php';
}

function homemenu(){}

?>


