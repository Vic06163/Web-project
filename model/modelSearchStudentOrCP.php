<?php

abstract class ModelDB
{
    private static $_db;

    private static function setDB()        // Makes the connection to the DB
    {
        self::$_db = new PDO('mysql:host=localhost:3307;dbname=stagesensor', 'root', 'root');
        self::$_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        self::$_db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    public function getDB()        // Instantiates and returns the associated PDO object
    {
        if(self::$_db == null)
          self::setDB();
        return self::$_db;
    }
}

function searchStudents(){
    $db = ModelDB::getDB();
    $StudentsSearch = $db->query("SELECT Nom,Prenom,Centre,Promotion FROM etudiant ORDER BY Centre DESC");
    if(isset($_GET['search']) AND !empty($_GET['search'])){
        $search = htmlspecialchars($_GET['search']);
        $StudentsSearch = $db->query('SELECT Nom,Prenom,Centre,Promotion FROM etudiant WHERE Nom LIKE "%'.$search.'%"');
    }
    return $StudentsSearch;
}

function searchCP(){
    $db = ModelDB::getDB();
    $CPSearch = $db->query("SELECT Nom,Prenom,Centre,Promotion FROM etudiant WHERE Role='Class president' ORDER BY Centre DESC");
    if(isset($_GET['search']) AND !empty($_GET['search'])){
        $search = htmlspecialchars($_GET['search']);
        $CPSearch = $db->query('SELECT Nom,Prenom,Centre,Promotion FROM etudiant WHERE Role="Class president" AND Nom LIKE "%'.$search.'%"');
    }
    return $CPSearch;
}

?>
