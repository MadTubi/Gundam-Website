<!-- Check is user is logged in and connecst to database-->
<?php
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
    
    <h2>Gundam Page</h2>

    <div id="GundamBox">

        <div id="ScaleBox">
            <h3>Scales of Gundam Modesl</h3>
            <br>
            <img src="Image/Scale.jpg" alt="Scale of Gundam Models" id="Scale"/>
            <br>
            <p id="ScaleText">
                Gunpla kits come in different scales. The scale refers 
                to how the model would measure up to an actual Gundam. 
                There are 1/144, 1/100, 1/60, and 1/48. The scales are 
                broken down into Grades. The Grades are typically the
                difficulty of each model build. The scale size 1/144 is
                usually the easiest build and it goes down from there.
            </p>

        </div>

        <div id="TypeBox">
            <h3>Types of Gundam Models</h3>
            <ul class="Who">
                <li class="Who3"><a class="WhiteLinks" href="Entry_Grade.php">Entry Grade</a></li>
                <li class="Who3"><a class="WhiteLinks" href="First_Grade.php">First Grade</a></li>
                <li class="Who3"><a class="WhiteLinks" href="High_Grade.php">High Grade</a></li>
                <li class="Who3"><a class="WhiteLinks" href="Master_Grade.php">Master Grade</a></li>
                <li class="Who3"><a class="WhiteLinks" href="Real_Grade.php">Real Grade</a></li>

            </ul>
            <br>
            <img src="Image/Gif-Of-Gundam.gif" alt="Gif of Gundam Transforming" id="Gif4Gundam">
            <br>
        </div>
        
    </div>

    <footer>
        <p>Contact Info: <a href="mailto:madtay324@gmail.com">Email</a></p>
        <p>&copy2023 Gundam Freak</p>
    </footer>

</body>
</html>