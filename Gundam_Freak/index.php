
<?php
    session_start();
    require_once ('DBGundam.php');
 
?>
<!-- connect  to database and check is user is logged in -->
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
            the session are still set, you will be able to see certain tabs in the nav bar.
        
            This is different from the other tables because the Admin tab on the navbar
            can be seen if an Admin user is logged in -->
            <?php
                if (isset($_SESSION["AdminFlag"]) && $_SESSION["AdminFlag"] == 'Yes'){
                
            ?>
                    <a href="Admin.php">Admin</a>
            <?php   } ?>

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

    <h2>Gundam Of The Day</h2>

   <div id="GundamOfTheDay">

        <div id="Image">
            <!--Pull select information from the database at random and show on the webpage by using
            sql querry and RAND() method.-->
            <?php
                $Gundam = "Select GundamImage,GundamDescription from Gundam_V2 ORDER BY RAND() LIMIT 1";
                $Pull = $conn->prepare($Gundam);
                $Pull->execute();
                $Pulling = $Pull->fetchAll();

                foreach($Pulling as $val){

            ?>
                <img src="<?php  echo $val['GundamImage'] ?>" alt="Gundam of the Day" id="Gun1">
                <br>
                <div id="Text4Gun">
                        <p id="IMTEXT">
                            <?php echo $val['GundamDescription'] ?>
                        </p>

            <?php 
                }
            ?>
                </div>
        </div>

        <div id="Gif">
            <h3>Welcome to Gundam Freak.</h3>
            <p>The best website for the best information on gundam model kits.</p>
            <br>
            <img src="Image/mobile-suit-gundam-gundam.gif" alt="Gif of Gundam" id="GifGundam">
            <br>
        </div>
    </div>


   <div id="Tip">
        <h2>Tip of the Day: </h2>
        <p id="Text">
            <!--Pull select information from the database at random and show on the webpage by using
            sql querry and RAND() method.-->

            <?php
                $tipQ = "Select TipDescription from Tips ORDER BY RAND() LIMIT 1";
                $pull = $conn->prepare($tipQ);
                $pull->execute();
                $PullTip = $pull->fetchAll();

                foreach($PullTip as $value){
                    
            ?>

                <?php echo $value['TipDescription'] ?>
           

            <?php
                }
            ?>
        </p>
   </div>

   <footer>
        <p>Contact Info: <a href="mailto:madtay324@gmail.com">Email</a></p>
        <p>&copy2023 Gundam Freak</p>
    </footer>

</body>
</html>



