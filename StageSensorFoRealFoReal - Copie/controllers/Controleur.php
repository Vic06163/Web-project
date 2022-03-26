<?php

require 'models/Model.php';

function login(){
    $users = getUsers();
    require 'views/viewLogin.php';
}

?>


