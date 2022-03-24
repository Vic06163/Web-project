<?php
//session_start();
/* $bdd = new PDO('mysql:host=localhost:3307;dbname=stagesensor', 'root', 'root'); */

$bdd = mysqli_connect('localhost:3307', 'root', 'root') or die ("could not connect to mysql"); 
mysqli_select_db($bdd, 'stagesensor') or die ("no database");   

if(isset($_POST['username']) && isset($_POST['password'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if(empty($username)){
        header("Location: index.php?error=Username is required");
        exit();
    } else if(empty($password)){
        header("Location: index.php?error=Password is required");
        exit();
    } else{
        $sql = "SELECT Identifiant, MDP FROM utilisateur WHERE Identifiant='$username' AND MDP='$password'";
        $query = mysqli_query($bdd, $sql) or die(mysql_error());
        
        if(mysqli_num_rows($query) == 1){
            echo'hello';
            $row = mysqli_fetch_assoc($query);
            print_r($row);
        }
    }

} else{
    header("Location: index.php");
    exit();
}
?>





<!-- $username = $_POST['username'];
    $password = $_POST['password'];

    echo $username, $password;

    $bdd = new PDO('mysql:host=localhost:3307;dbname=stagesensor', 'root', 'root');

    $sql = "SELECT * FROM user WHERE Identifiant = '$username' ";
    $result = $bdd->prepare($sql);
    $result->execute();

    if($result->rowCount() > 0){
        $data = $result->fetchAll();
        if(password_verify($password, $data[0]["MDP"])){
            echo "Connexion effectué";
            $_SESSION['Identifiant'] = $username;
        }

    } else{
        echo "Mauvais mdp";
    } -->