<?php

require '../models/modelSearchStudent.php';

function search(){
    $StudentsSearch = searchStudents();
    require '../Views/viewSearchStudent/viewSearchStudent.php';
}


?>
