<?php
    //This page connects to the rating that can be seen when you click on a Gundam title on the right of the screen.
    //It inserts your rating of the specific GundamID into the database , based on your User_ID.

    session_start();
    require_once ('DBGundam.php');


    if (isset($_SESSION["Success"]) && $_SESSION["Success"] == true){

        if(isset($_POST["RateGund"])){

            $IDGun = $_POST["IdforGundam"];
            $Score = $_POST["rate"];

            $Egg = "INSERT INTO User_Gundam (GundamID,Rating,User_ID) VALUES (?, ? , ?)";
            $Chicken = $conn->prepare($Egg);

            if($Chicken->execute([$IDGun,$Score,$_SESSION["ID"]])){
                //Rating stored successfully, being directed back to Gundam page
                echo "Rating store successfully.";
                echo "Being redirected to Gundam page. In 10 secs.";
                header("refresh: 10; url=Gundam.php");

            }else{
                //Rating was not sucessfully stored in DB, sent back to Gundam page.
                echo "Not working! Try again later.";
                echo "Being redirected to Gundam page. In 10 secs.";
                header("refresh: 10; url=Gundam.php");

            }

            
        }

     
    }else{
        //If user does not have an account then it redirects them back to the Gundam page.
        echo "<h3>You do not have an account. Create one to interact with the rating system.</h3>";
        echo "<h3>Now being redirected to back to Gundam page in 10 secs.</h3>";
        header("refresh: 10; url=Gundam.php");

    }


?>