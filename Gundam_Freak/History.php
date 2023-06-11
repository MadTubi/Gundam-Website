<!-- check to see if user is logged in -->
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

    <h2 id="History">History of Gundam Kits</h2>
    
    <div id="HistoryText">
        <p class="HText">
            Gundams are kits that come with trays of plastic parts that 
            snap together to make the large robots or “mechas” that you 
            see in tv shows or most notably anime.
        </p>

        <p class="HText">
            Gundams are manufactured by Bandai in Japan, or China,
             which has an exclusive license in manufacturing and 
             marketing the kits around the world. The anime, 
             <em>Mobile Suit Gundam</em> which was the first Gundam 
             series ever, aired in 1979. Then almost a year 
             later, the first Gunpla kit appeared.
        </p>

        <br>
        <img src="Image/Movie.jpg" alt="Poster from Original Gundam Triology Movie" id="Movie"/>
        <figcaption>Image of Orignal Poster for Series </figcaption>
        <br>

    </div>

    <footer>
        <p>Contact Info: <a href="mailto:madtay324@gmail.com">Email</a></p>
        <p>&copy2023 Gundam Freak</p>
    </footer>
    
</body>
</html>