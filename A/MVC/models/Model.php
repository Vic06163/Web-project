<?php
/* abstract class Model
{
    private static $_bdd;

    private static function setBdd()        // Makes the connection to the DB
    {
        self::$_bdd = new PDO('mysql:host=localhost:3307;dbname=stagesensor', 'root', 'root');
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    protected function getBdd()        // Instantiates and returns the associated PDO object
    {
        if(self::$_bdd == null)
          self::setBdd();
        return self::$_bdd;
    }

    protected function getUsers($table, $obj)
    {
        $var = [];
        $req = $this->getBdd()->prepare('SELECT Identifiant, MDP FROM ' .$table. '');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }
} */


// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBdd() {
    $bdd = new PDO('mysql:host=localhost;dbname=stagesensor;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}


//All of the page function are define here:

function getUsers() {
    $bdd = getBdd();
    $users = $bdd->query('SELECT Identifiant FROM utilisateur');
    return $users;
}



?>



