<!--This checks if the user is logged in and is an admin. It also connects to the database.-->
<?php
    session_start();
    require_once ('DBGundam.php');
    require_once ('sessions.php');

    if (!isset($_SESSION["AdminFlag"]) && $_SESSION["AdminFlag"] !== 'Yes'){
        header("Location: index.php");
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
            <a href="Admin.php">Admin</a>

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
    <br>

    <h3 class="AdminText">
        <!-- Just echos out whatever the user's name is that is logged in.-->
        Hello <?php echo $_SESSION["User"]; ?> , this is the admin page. 
    </h3>

    <h3 class="AdminText">
        ***Users will be able to upload images. Make sure to check the 'User_Photo' folder on the server
        and Approval table. "Push" the images and description to the User_Gundam table to be view on the site 
        under User_Photo Gallery.
    </h3>

    <h3 class="AdminText">
       Below you can delete users if needed.
    </h3>

   


    <div id="AdminBox">
        <table id="CenterTable">
            <tr>
                <th>User ID</th>
                <th>User name</th>
                <th>Delete ? </th>
            </tr>
            <tr>
                <!--This outputs the list of users from the Database and allows the admin to delete users.-->
                <?php
                    $Show = "Select User_ID, Username from Logins";
                    $Me = $conn->prepare($Show);
                    $Me->execute();
                    $Meme = $Me->fetchAll();

                    foreach($Meme as $valley){

                ?>
                <td><?php echo $valley['User_ID']; ?></td>
                <td><?php echo $valley['Username']; ?></td>
                <?php echo "<td><a href='delete.php?id=".urlencode($valley['User_ID']) . "'onclick='return confirm(\"Are you sure?\");'><font color='red'>X</font></a></td>";  ?>
            </tr>
                <?php } ?>
            
        </table>
                

    </div>

    
    <footer class="F2">
        <p>Contact Info: <a href="mailto:madtay324@gmail.com">Email</a></p>
        <p>&copy2023 Gundam Freak</p>
    </footer>
    
</body>
</html>