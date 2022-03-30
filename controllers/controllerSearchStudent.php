<?php

require '../model/modelSearchStudentOrCP.php';

function Students(){
    $StudentsSearch = searchStudents();
    require '../views/viewSearchStudentOrCP.php';
}

Students();

?>
