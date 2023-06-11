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

    <h2>Tools Page</h2>

    <div  id="ToolBox">
        
        <br>
        <img src="Image/Tools/Set_of_Tools.jpg" alt="Set of Gundam Tools" id="SetOfTools"/>
        <br>

        <p id="ToolText">
            These are some of the highly rated tools that can be 
            used with Gundam models. You can buy kits that come 
            with all these tools included. It really just depends 
            on what you plan on doing. If you stick with 
            typically low grade Gundam’s that don’t have stickers 
            , you could go without tweezers for example. 
            Kits tend to be a good way to start off with basic 
            tools. The higher quality the kit, the more expensive 
            it tends to be. 
        </p>

        <h3>Best Type of Side Cutters: </h3>
        <ul class="Who">
            <li class="Who3">God Hand SPN-120 Ultimate Nipper 5.0</li>
            <li class="Who3">Gundam Planet Premium Nipper Side Cutter</li>
            <li class="Who3">GSI Creos Mr.Nipper Side Cutter</li>
            <li class="Who3">Tamiya Sharp Pointed Side Cutter</li>
        </ul>

        <h3>Best Type of X-Acto Knife: </h3>
        <ul class="Who">
            <li class="Who3">Tamiya Precision Cutter</li>
            <li class="Who3">X-Acto Fine Point Knife</li>
            <li class="Who3">Tamiya Modeler's Knife Pro</li>
            <li class="Who3">Olfa Cusion Grip Pro</li>
        </ul>

        <h3>Best Type of Tweezers: </h3>
        <ul class="Who">
            <li class="Who3">Tamiya Angled Tweezers</li>
            <li class="Who3">Hakko Precision Tweezers</li>
            <li class="Who3">Uxell Stainless Steel Tweezers</li>
        </ul>

        <h3>Best Sanding Sticks: </h3>
        <ul class="Who">
            <li class="Who3">Kamiyasu Sanding Stick #400</li>
            <li class="Who3">Model Sanding Stick [MINI] 3 Pack Bandai Spirits</li>
        </ul>

        <h3>Gundam Markers: </h3>
        <ul class="Who">
            <li class="Who3">GSI Creos Gundam Marker Ultra Fine Set</li>
            <li class="Who3">COPIC Multi-Liners</li>
            <li class="Who3">Bandai Gundam Marker Pen Set(Pour Type)</li>
            <li class="Who3">GSI Creos GM301P Black Pour</li>
            <li class="Who3">Gundam metallic Marker Set</li>
        </ul>

        <h3>Best Brands of Paints: </h3>
        <ul class="Who">
            <li class="Who3">Acrylic Paint: Tamiya, Vitadel, Vallejo</li>
            <li class="Who3">Enamel: Testors, Humbrol Gundam Markers</li>
            <li class="Who3">Lacquer: Mr.Color and Alcad II Testors </li>
            <li class="Who3">Oil: Windsor & Newton and Gamblin</li>
        <ul>

    </div>

   
    <footer>
        <p>Contact Info: <a href="mailto:madtay324@gmail.com">Email</a></p>
        <p>&copy2023 Gundam Freak</p>
    </footer>


 

</body>
</html>