<?php

require 'C:\www\Stage-Sensor\Views\viewLogin\viewLogin.php';

function getLogin() {

    $db = new PDO('mysql:host=localhost:3307;dbname=stagesensor', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
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
            header("Location: viewLogin.php?error=Username is required");
            exit();
        } else if(empty($password)){
            header("Location: viewLogin.php?error=Password is required");
            exit();
        } else{
            $sql = "SELECT * FROM utilisateur WHERE Identifiant ='$username' AND MDP='$password' ";
            $result = $db->prepare($sql);
            $result->execute();
            $data = $result->fetchAll();
            print_r($data);
        }
    } else{
        header("Location: index.php");
        exit();
    }
}
    