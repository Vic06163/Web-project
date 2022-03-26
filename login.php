<?php



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
        $sql = getUsers($username, $password);
        $query = mysqli_query($bdd, $sql);

        if(mysqli_num_rows($query)){
            $row = mysqli_fetch_assoc($query);
            print_r($row);
        }
    }
    
} else{
    header("Location: viewLogin.php");
    exit();
}
?>