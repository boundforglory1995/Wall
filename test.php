<html>
<head>
</head>
<body>

<form method="POST" role="form" action="">
<input type="text" name="user">
<input type="text" name="pass">
<input type="text" name="newpassword">
<input type="text" name="confirm">



<input type="submit">

</form> 

<?php
error_reporting(E_ALL);
include('includes/db.php');
if(isset($_POST['user'],$_POST['pass'],$_POST['newpassword'],$_POST['confirm'])){
     
        var_dump($_POST);
        var_dump($_POST['user'],$_POST['pass'],$_POST['newpassword']);
 		$username =$_POST['user']; 
        $password = $_POST['pass'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirm'];
            }

      var_dump($_POST);
        


        ?>
    </body>
    </html>