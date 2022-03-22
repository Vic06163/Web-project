<?php
if(!empty($_GET) && !empty($_GET['search'])){
    try{
        $bdd = new PDO('mysql:host=localhost:3307;dbname=stagesensor', 'root', 'root');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $req = $bdd->prepare('SELECT Nom, Secteur_activite FROM Entreprise WHERE Nom LIKE :search ORDER BY ID_entreprise ASC');
        $req = $bdd->blindValue(':search', '%'.strip_tags($_POST['search']).'%', PDO::PARAM_STR);
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        
        if(count($data) > 0)
        {
            foreach( $data AS $data )
                echo htmlspecialchars($data->Nom);
        }
        else echo 'Aucun résultat';
    } catch(PDOExeption $e){
        die('Erreur'.$e->getMessage());
    }
}
?>