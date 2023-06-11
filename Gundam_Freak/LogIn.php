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


    <div class=Center>
        <!-- Log in page  that connects to Log.php which checks database for  username and password.-->

        <h1 class="SLText">Log In </h1>
        <form action="Log.php" method="post">
            <br>
            <img src="Image/LogInImage.jpg" alt="Image of Gundam pieces" id="LogInImage">
            <br>
            <input type="text" id="username" name="username" placeholder="username" required/>
            <input type="password" id="password" name="password" placeholder="Password" required/>
            

            
            <input type="submit" id="logIn" name="login_submit" value="Log in" />
        </form>
    </div>

    <p class="CenterP"><a class="WhiteLinks" href="SignUp.php">Don't have an account? Sign Up</a></p>
    <p class="CenterP"><a class="WhiteLinks" href="index.php">Don't want to Log In? Go Back to Home</a></p>




</body>
</html>


