<?php
    //Logs out user by unsetting, or erasing, session variables
    session_start();
    unset($_SESSION['User']);
    unset($_SESSION['AdminFlag']);
    session_destroy();
    header("Location:LogIn.php");

?>