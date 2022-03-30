<?php

function getDB(){
    $db = mysqli_connect('localhost:3307', 'root', 'root', 'stagesensor');
    if(!$db){
        echo 'Connection DB failed';
    } else{
        return $db;
    }
}

function getLogin(){
    
    $db = getDB();
    
    if(isset($_POST['username']) && isset($_POST['password'])){

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if(empty($username)){
            header("Location: ../index.php?error=Username is required");
            exit();
        
        } else if(empty($password)){
            header("Location: ../index.php?error=Password is required");
            exit();

        } else{
            
            $sql = "SELECT * FROM utilisateur WHERE Identifiant ='$username'";
            $result = mysqli_query($db, $sql);
        
            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                $password = sha1($password);        // Encrypted password
        
                if($row['Identifiant'] === $username && $row['MDP'] === $password){
                    $_SESSION['last_name'] = $row['Nom'];
                    $_SESSION['first_name'] = $row['Prenom'];
                    $_SESSION['role'] = $row['Role'];
                    header("Location: ../views/viewHome.php");
                    
                } else{
                    header("Location: ../index.php?error=Incorect usename or password");
                    exit();
                }
        
            } else{
                header("Location: ../index.php?error=Incorect username or password");
                exit();
            }
        }
    } else{
        header("Location: ../index.php");
        exit();
    }

}

?>