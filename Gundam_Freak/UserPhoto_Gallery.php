<?php
    //Checks if user is logged in
    session_start();
    require_once ('DBGundam.php');
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
    <h1>Gundam Freak</h1>
    <header>

        <div class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="History.php">History of Gundams</a>

            <div class="dropdown">
                <p class="dropbtn">Photos
                    <i class="fa fa-caret-down"></i>
                </p>
                <div class="dropdown-content">
                    <a href="Photo_Gallery.php">Photo Gallery</a>
                    <a href="UserPhoto_Gallery.php">User Photo Gallery</a>
                </div>
            </div>
            <a href="Gundam.php">Gundam</a>
            <a href="Tools.php">Tools</a>

            <!-- This is based off of the session start at the beginning of the page. If variables from
            the session are still set, you will be able to see certain tabs in the nav bar.-->

            <?php
                if (isset($_SESSION["Success"]) && $_SESSION["Success"] == true){
                
            ?>
                    <div class="nav-right">
                        <a href="Profile_Page.php">Profile</a>
                    </div>
            <?php }else{ ?>
                    <div class="nav-right">
                        <a href="SignUp.php">Sign Up</a>
                        <a href="LogIn.php">Log In</a>
                    </div>
            <?php } ?>



        </div>
       
    </header>

    <h2>Users' Photo Gallery</h2>
    <h2>Here are the images and description added by account users.</h2>

    <div class="PhotoBox">
        <!-- Selects info that the user uploaded and shows it onb the webpage-->
        <?php
            $UserPic = "Select UserGundamImage,Verbage from User_Gundam";
            $DBUSPic = $conn->prepare($UserPic);
            $DBUSPic->execute();
            $USPIC = $DBUSPic->fetchAll();

            foreach($USPIC as $UserImages){

            

        ?>
            <div class="ImageBoxes">
                <br>
                <img src="<?php echo $UserImages['UserGundamImage'] ?>" alt="User's uploaded images and verbage" class="ImagePhoto">
                <h3>Description: <?php echo $UserImages['Verbage'] ?></h3>
            </div>


        <?php
            }
        ?>

    </div>
    
    

    <footer>
        <p>Contact Info: <a href="mailto:madtay324@gmail.com">Email</a></p>
        <p>&copy2023 Gundam Freak</p>
    </footer>


</body>
</html>