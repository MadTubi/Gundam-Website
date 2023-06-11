<!--Checks to make sure the user is logged in  and connects to database-->
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
    <!--JQUERY FROM GOOGLE FOR FREE https://www.w3schools.com/jquery/jquery_get_started.asp -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>
<body>
    <h2 id="Title1"> Master Grade Gundam Kits</h2>

    <div id="EntBox">
        <h3>Click one of the Gundam titles to see more info about them.</h3>

        <ul class="Who">
             <!-- Connect to database to pull information, the titles, use sql query. The foreach loop creates html li tags based on
            how many titles are pulled from the database-->
            <?php

                require_once ('DBGundam.php');
                $entry = "Select Title from Gundam_V2 where Grade = 'Master'";
                $results = $conn->prepare($entry);
                $results->execute();
                $row=$results->fetchAll();

                foreach($row as $row1){

            ?>
                    
                <li class = "Who3 Entries"><?php echo $row1['Title']?></li>
                    

                
            <?php
                }
            ?>
        
        </ul>

    </div>
    
    <p class="CenterP"><a class="WhiteLinks" href="Gundam.php">Back to Gundam Page</a></p>
    <!-- Connects to javascript page "myjJS.js"-->
    <script src="myJS.js"></script>
    
</body>
</html>