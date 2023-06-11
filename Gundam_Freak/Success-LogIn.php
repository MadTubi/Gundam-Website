<?php
//Check is user is logged in or not.
    session_start();

    if (isset($_SESSION["Success"]) && $_SESSION["Success"] == true){
        //echo "Welcome!!";
    }else{
        echo "Must be logged in to see this page";
        header("LogIn.php");
    }
    
?>
   
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Website" content="Project 4">
    <meta name="keywords" content="HTML,CSS">
    <title>Gundam Freak</title>

    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image" href="Favicon/favicon.ico">

</head>
<body>
    <div class="Center">
        <!-- All this page does, is pop up tp show you that you have successfull logged in and you can press
        the two hrefs at the bottom to move around-->

        <p class="CenterP">You have successfully signed in .<a class="WhiteLinks" href="index.php"> Click here to go to Home page</p>
        <p class="CenterP">You have successfully signed in .<a class="WhiteLinks" href="Profile_Page.php"> Click here to go to your Profile Page</p>

    </div>
</body>