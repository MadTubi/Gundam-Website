<?php

    //This php page is connected to a post method from a form that 
    //account users connect to when they submit an image and description into 
    //a table called "Approval" in the database.

    //IF the uplod was completed, then a messgae will pritn on the screen and
    // the user will be sent to the home page in 10 seconds. Same thing happens 
    //for if the upload was not completed and the user is sent back to their profile
    //page in ten seconds.

    error_reporting(0);
    $msg = "";

    session_start();
    require_once ('DBGundam.php');
    require_once ('sessions.php');

    if(isset($_POST["upload"])){

        $fileName = $_FILES["uploadFile"]["name"];
        $tempname = $_FILES["uploadFile"]["tmp_name"];
        $folder = "User_Photo/" . $fileName;

        $UserDes = $_POST['UploadDescription'];

        //Get all the submitted data from the form
        $Grab = "INSERT INTO Approval(Requested_Image, Requested_Description, User_ID) VALUES ('$folder', ?, ? )";
        $Getting  = $conn->prepare($Grab);
        $Getting->execute([$UserDes,$_SESSION["ID"]]);

        //Move uploaded image to folder: User_Photo
        if(move_uploaded_file($tempname, $folder)){
            echo "Your image was uploaded successfully. You will be redirect back to the home page in 10 secs.";
            header("refresh: 10; url=index.php");
            
        }else{
            
            echo "Error! Your image was not able to be uploaded. You will be redirected back to your Profile Page in 10 seconds.";
            header("refresh: 10; url=Profile_Page.php");
        }

    }
 
?>
