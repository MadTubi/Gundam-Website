
<!-- Checks if user is logged in. If not, then the user will be redirecetd to a different page.-->
<?php
    session_start();

    if (isset($_SESSION["Success"]) && $_SESSION["Success"] == true){

    }else{
        echo "Must be logged in to see this page";
        header("Location: LogIn.php");

    }

    if (!isset($_SESSION["Success"])){
        header("Location: LogIn.php");
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

    <h1>User-Profile Page</h1>


    <h3>
        Thank you for signing up as a user for this website. :) Now that you are logged in, you are able to vote on the polls and
        vote on the Gundams under the Gundam tag. On this page you will be able to upload your own image of gundams and a description
        of them if you want.

    </h3>

    <h3>
        *****Your gundam and description will not be seen automatically. The admin must first aprove the the upload then it can be seen by other 
        users of the site. Please refrain from uploading inappropritate images and words.
    </h3>

    
    <div id="ProfileBox">
        <!-- Shows the user name-->
        <h3> Hello <?php echo $_SESSION["User"]; ?> !!</h3>

        <form action="action.php" method="post" enctype="multipart/form-data" id="ProfileForm">

            <input class="formControl" type="file" name="uploadFile" value="" required/>
            <br>
            <input type="text" id="UploadDescription" name="UploadDescription"  size="50" placeholder="Please write either the description of the Gundam or the name of said gundam. If it cannot be find, then please put N/A." required>
            <br>
            <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>

        </form>

        <br>
        <form action="LogOut.php" id="LogOutButton">
            <button class="btn btn-primary" type="submit" name="LogOut">Log Out</button>
        </form>

    </div>

    <p class="CenterP"><a class="WhiteLinks" href="index.php">Go to Home</a></p>

  
    <footer Class="F2">
        <p>Contact Info: <a href="mailto:madtay324@gmail.com">Email</a></p>
        <p>&copy2023 Gundam Freak</p>
    </footer>
    
</body>
</html>