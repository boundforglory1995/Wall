<?php

    
        print_r($_POST);
        echo'yo';
        $username =$_POST['username']; 
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirm'];
        

        $result = mysql_query("SELECT password FROM users WHERE username='$username'");

            if(!$result)
            {
                echo "The username entered does not exist!";
            }
            
            elseif($password != mysql_result($result, 0))
            {
                echo "Entered an incorrect password";
            }

            if($newpassword == $confirmnewpassword)
            {
                $sql = mysql_query("UPDATE users SET password = '$newpassword' WHERE username = '$username'");      
            } 

            if(!$sql)
            {
                echo "Congratulations, password successfully changed!";
                header("location:users.php");
            }
            else
            {
                echo "New password and confirm password must be the same!";
            }



        


        



?>