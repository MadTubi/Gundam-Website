<!-- This checks if the user is logged in and make sure that it is connected to the datahase.-->
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

    <h2 id="About">About</h2>
    
    <div id="AboutBox">
        <br>
        <p id="TextA">
            I created this website because this is a personal hobby
            of mine. I have always loved tv-shows and animes with the 
            protagonist controlling a giant robot to save the day. It 
            started from my love of the show<em> Power Rangers</em> 
            to animes such as <em> Gurren Lagann </em>, <em>Darling 
            in the FranXX</em>, and <em>Neon Genesis Evangelion</em>
            to name a few. So when I found out that I could build 
            those same robots I loved so much, I was instantly hooked.
            I hope that viewing my website will hopefully introduce
            you to some new shows or a new hobby.

        </p>

        <br>
        <img src="Image/IMG_6727.jpg" alt="Personal Gundam" id="MyGundams"/>
        <figcaption>Image of Creator's Personal Gundams</figcaption>
        <br>

    </div>

    
    <footer>
        <p>Contact Info: <a href="mailto:madtay324@gmail.com">Email</a></p>
        <p>&copy2023 Gundam Freak</p>
    </footer>
    
</body>
</html>