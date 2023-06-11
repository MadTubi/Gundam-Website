<?php

    //This connects to a post method to log users in .
    //Based on if the button is clicked, if checks if the username and password 
    //box is not empty.

    session_start();
    require_once ('DBGundam.php');
    require_once ('sessions.php');


    if(isset($_POST["login_submit"])){
        if((isset($_POST['username']) && $_POST['username'] !== "") && (isset($_POST['password']) && $_POST ['password'] !== "")){

            //Set variables fro entered username and password
            $logname = $_POST['username'];
            $logpass = $_POST['password'];

            //Check is user exists
            $query2 = "SELECT * FROM Logins WHERE Username = ?";
            $stmt = $conn->prepare($query2);
            $stmt-> execute([$logname]);


            //Username found so now check password
            if ($stmt){
                //Use password_check function to unhash password to check if they match
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                if (password_check($logpass, $row['User_Password'])){

                    $_SESSION["User"] = $row["Username"];
                    $_SESSION["ID"] = $row["User_ID"];
                    $_SESSION["Success"] = true;
                    if ($row['Admin'] == 'Yes'){
                        //Checks if user is an Admin
                        $_SESSION["AdminFlag"] = true;
    
                    }//Header sends them to another page
                    header("Location: Success-LogIn.php");

                }else{
                    $_SESSION['message'] = "Username/Password not found";
                    header("Location: SignUp.php");
                }
                

                
            }else{
                $_SESSION['message'] = "Username/Password not found";
                header("Location: SignUp.php");
            }
        }else{
            $_SESSION['message'] = "Must login first";
            header("Location: SignUp.php");
        }
    }



?>   
