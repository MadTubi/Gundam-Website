<!-- Checks if user is logged in or not and connects to database.-->
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

    <h2>Gallery Page</h2>
    
    <!-- JavaScript that makes a back to top bottm when you scroll to a certain point-->
    <button onclick="GoToTop()" id="myBtn" title="TopScroll">Top</button>

    <div class="PhotoBox">
        <!-- Selects certain info from DB and shows it on the web page. It continues to create html divs, h3 tags, and img tags, based on how
        many Titles,Grades, and Images there are-->
        <?php
            $pic = "Select Title,Grade,GundamImage from Gundam_V2";
            $DBPic = $conn->prepare($pic);
            $DBPic->execute();
            $DB = $DBPic->fetchAll();

            foreach($DB as $Pict){

        ?>

            <div class="ImageBoxes">
                <h3><?php echo $Pict['Title'] ?></h3>
                <h3>Grade: <?php echo $Pict['Grade'] ?></h3>
                <img src="<?php echo $Pict['GundamImage'] ?>" alt="Multiple images of Gundams from Gundam Page" class="ImagePhoto">
                
            </div>


        <?php
            }
        ?>
      
    </div>

    
    <footer>
        <p>Contact Info: <a href="mailto:madtay324@gmail.com">Email</a></p>
        <p>&copy2023 Gundam Freak</p>
    </footer>
    
    <!--Connects to javascript "Scroll.js"-->
    <script src="Scroll.js"></script>

</body>
</html>