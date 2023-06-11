<?php

    //Set variables for what is submited through post on SignUp.php page. Uses query to insert information into database.
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    $email = $_POST['email'];
    $cpassword = $_POST['cpassword'];

 

    if(empty($username)){
        die("Username is required!");
    }

    if (empty($email)){
        die("Valid email is required");
    }

    if($password !== $cpassword){
        die("Passwords must match");
    }


    
    require_once ('DBGundam.php');
    require_once ('sessions.php');

    $password = password_encrypt($_POST['password']);

    $query = "INSERT INTO Logins(Username, User_Password, Email) VALUES (?, ?, ?)";
    $results = $conn->prepare($query);

    if ($results->execute([$username, $password, $email])){
        header("Location: Success-SignUp.php");
        exit;
    }

    

?>   
