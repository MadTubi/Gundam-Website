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

    <div class="Center">
        <h1 class="SLText">Sign Up</h1>
        <!-- Connects to Sign.php page where information from text box is submitted to the page-->
        <form action="Sign.php" method="post">
            <br>
            <img src ="Image/SignUpImage.jpg" alt="Image of Gundam Posing" id="SignUpImage">
            <br>
            <input type="text" id="username" name="username" placeholder="username" required/>
            <input type="text" id="email" name="email" placeholder="E-mail" required/>
            <input type="password" id="password" name="password" placeholder="Password" required/>
            <input type="password" id="cpassword" name="cpassword" placeholder="Re-enter Password" required/>
        
            <input type ="submit" class="btn btn-primary"  id="submit" name="submit" value="Submit"/>
        
        </form>
    </div>

    <p class="CenterP"><a class="WhiteLinks" href="LogIn.php">Already have an account? Log In </a></p>
    <p class="CenterP"><a class="WhiteLinks" href="index.php">Don't want to Sign up? Go Back to Home</a></p>


</body>
</html>


