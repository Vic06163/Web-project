<?php

session_start();
require '../model/modelLogin.php';

function getLoginUser(){
    $login = getLogin();
}

getLoginUser();

?>