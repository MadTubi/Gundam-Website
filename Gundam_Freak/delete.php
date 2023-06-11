<?php
    //Allows admin to delete Users
    session_start();
    require_once ('DBGundam.php');
    require_once ('sessions.php');

    if(isset($_GET['id']) && $_GET['id'] !==""){

        $Delete = "Delete FROM Logins WHERE User_ID = ?";
        $Remove = $conn->prepare($Delete);
        $Remove->execute([$_GET['id']]);

        if($Remove){

            $_SESSION["MSG"] = "User removed!";
            echo $_SESSION["MSG"];
            header("Location: Admin.php");

        }else{

            $_SESSION["MSG"] = "User cannot be removed!";
            echo $_SESSION["MSG"];


        }

    }else{
        $_SESSION["MSG"] = "User cannot be found!";
        header("Location: Admin.php");
    }


?>