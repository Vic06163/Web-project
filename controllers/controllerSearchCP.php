<?php

require '../model/modelSearchStudentOrCP.php';

function CP(){
    $StudentsSearch = searchCP();
    require '../views/viewSearchStudentOrCP.php';
}

CP();

?>
