<?php

$bdd = mysqli_connect('localhost:3307', 'root', 'root') or die ("could not connect to mysql"); 
mysqli_select_db($bdd, 'stagesensor') or die ("no database");

if(!$bdd){
    echo "Connection failed";
} else {

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
            $sql = ('SELECT * FROM utilisateur WHERE `Identifiant` = \''.$username.'\'');
            $query = mysqli_query($bdd, $sql);

            if(mysqli_num_rows($query)){
                $row = mysqli_fetch_assoc($query);
                print_r($row);
            }
        }
    
    } else{
        header("Location: index.php");
        exit();
    }
}
?>