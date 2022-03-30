<?php

//Call the model
require '../models/modelUserinfo.php';

//
function userinfo(){
    $userinfos = getUserinfo();
    require '../Views/viewUserinfo/viewUserinfo.php';
}


?>