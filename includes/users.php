<?php

if(isset($_COOKIE['admin_name'],$_COOKIE['admin_pass'])){


}else{header("location:../wall.php");}

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link href="simple-sidebar.css" rel="stylesheet">

<style>
body{text-align: center;margin:0;
	padding:0;}
    .login-panel {
        margin-top: 150px;
        text-align: center;
    }
    .table {
        margin-top: 80px;
        text-align: center;
        margin: 0 auto;

    }
    h1{text-align: left;}
    th{text-align: left;
        width:100%;
        height:5%;
        margin:0 auto;
        padding:0 auto;}
        td{text-align: left;}
    #edituser{
        display: block;
        clear: both;
    }
    input{width:100%;
        margin:0 auto;
        padding:0 auto;}
    #sidebar-wrapper{width: 10%;
        text-align: left;
        overflow: hidden;
        top:0;}

        a:active{
            color:white;
        }

    label{float:left;}
    #editform{
        display: block;
        padding-right: 450px;
    }

    img{height:100px;
        width:100px;}
        

</style>
</head>
<body>

 <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Admin Paneel
                    </a>
                </li>
                <li>
                    <a href="users.php">Gebruikers</a>

                </li>
                <li>
                    <a href="images.php">Afbeeldingen</a>
                </li>

                <li>
                    <a href="../wall.php">The Wall</a>
                </li>

                <li>
                    <a href="../index.php">Home</a>
                </li>

                 <li>
                    <a href="Iplogs.php">Ip Adressen</a>
                </li>
            
            </ul>
        </div>
       

<div class="table-scrol">
    <h1 align="center">Verwijder Administrators</h1>

<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            <th> Administrators Id</th>
            <th>Administrators Gebruikersnaam</th>
            <th>Administrators Wachtwoord</th>
            <th>Administrators E-mail
            <th>Verwijder Administrators</th>
        </tr>
        </thead>

        <?php
        include('db.php');
        $view_users_query="select * from admin";//select query for viewing users.
        $run=mysql_query($view_users_query);//here run the sql query.

        while($row=mysql_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $id=$row[0];
            $username_user = $row[1];
            $password_pass = $row[2];
            $admin_mail = $row[3];
            



        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $id;  ?></td>
            <td><?php echo $username_user;  ?></td>
            <td><?php echo $password_pass;  ?></td>
            <td><?php echo $admin_mail;  ?></td>
            <td><a href="delete2.php?deladmin=<?php echo $id ?>"><button class="btn btn-danger">Verwijder</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
        </tr>

        <?php } ?>


     

    </table>
        </div>
</div>

 <br>
 <br>
 <br>  

<div class="table-scrol">
    <h1 align="center">Verwijder Gebruikers</h1>

<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            <th> Gebruikers Id</th>
            <th>Gebruikersnaam</th>
            <th>Wachtwoord</th>
            <th>E-mail</th>
            <th>Verwijder Gebruiker</th>
        </tr>
        </thead>

        <?php
        include('db.php');
        $view_users_query="select * from users";//select query for viewing users.
        $run=mysql_query($view_users_query);//here run the sql query.

        while($row=mysql_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $id=$row[0];
            $username_user = $row[1];
            $password_pass = $row[2];
            $email = $row[3];
            



        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $id;  ?></td>
            <td><?php echo $username_user;  ?></td>
            <td><?php echo $password_pass;  ?></td>
            <td><?php echo $email;  ?></td>
            <td><a href="delete2.php?del=<?php echo $id ?>"><button class="btn btn-danger">Verwijder</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
        </tr>

        <?php } ?>


     

    </table>
        </div>
</div>

<br>
<br>
<br>


<div class="table-scrol">
    <h1 align="center">Gebruiker Toevoegen</h1>

<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
     
      <form action="" role="form" method="post">
      <td><label for="username">Gebruikersnaam</label></td>
      <td><input type="text" name="username"></td>
      <td><label for="password">Wachtwoord</label></td>
      <td><input type="text" name="password"></td>
      <td><label for="email">E-mail</label></td>
      <td><input type="email" name="email"></td>
      <td><input type="submit" value="Gebruiker Toevoegen"></td>

     </form>

      


     

    </table>
        </div>
</div>
 
<?php 
include('db.php');
if(isset($_POST['username'],$_POST['password'])){
$username = $_POST['username'];
$password = md5($_POST['password']);
$email =$_POST['email'];
$queryadd = mysql_query("SELECT * from users where username = '$username'");
if(mysql_num_rows($queryadd)>1){
        ?>
        <script>
        $(document).ready(function(){
        alert("Gebruiker bestaat al");
        
         });
        </script>
        <?php
}else{
    $queryadding=mysql_query("INSERT INTO users(username,password,email) VALUES('$username','$password','$email')");
    
}

}
?>
<br>
<br>
<br>



<div class="table-scrol">
    <h1 align="center">Administrator Toevoegen</h1>

<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
     
      <form action="" role="form" method="post">
      <td><label for="Administrator Username">Administratornaam</label></td>
      <td><input type="text" name="admin_user"></td>
      <td><label for="Administrator Wachtwoord">Administrator Wachtwoord</label></td>
      <td><input type="text" name="admin_pass"></td>
      <td><label for="email">E-mail</label></td>
      <td><input type="email" name="admin_mail"></td>
      <td><input type="submit" value="Administrator Toevoegen"></td>

     </form>

      


     

    </table>
        </div>
</div>
 
<?php 
include('db.php');
if(isset($_POST['admin_user'],$_POST['admin_pass'],$_POST['admin_mail'])){
$admin_user = md5($_POST['admin_user']);
$admin_pass = md5($_POST['admin_pass']);
$admin_email =md5($_POST['admin_mail']);
$queryadd = mysql_query("SELECT * from admin where admin_name = '$admin_user'");
if(mysql_num_rows($queryadd)>1){
        ?>
        <script>
        $(document).ready(function(){
        alert("Administrator bestaat al");
        
         });
        </script>
        <?php
}else{
    $queryadding=mysql_query("INSERT INTO admin(admin_name,admin_pass,admin_mail) VALUES('$admin_user','$admin_pass','$admin_email')");
    
}

}
?>







<br>
<br>
<br>
<h1>Verander Wachtwoord</h1>

<table class="table table-bordered table-hover table-striped" id="edituser" style="table-layout: fixed">
<form method="POST" role="form" action="" id="editform">

<tr>
<td><label for="Username">Gebruikersnaam</label></td>
<td><input type="text" name="user" placeholder="Gebruikersnaam"></td>
<td><label for="Password">Wachtwoord</label></td>
<td><input type="text" name="pass" placeholder="Wachtwoord"></td>
<td><label for="New Password">Nieuw Wachtwoord</label></td>
<td><input type="text" name="newpassword" placeholder="Nieuw Wachtwoord"></td>
<td><label for="Confirm">Bevestig</label></td>
<td><input type="text" name="confirm" placeholder="Bevestig"></td>



<td><input type="submit" value="Verander Wachtwoord"></td>
</tr>
</form> 
</table>


<?php
include('db.php');
error_reporting(E_ALL);
if(isset($_POST['user'],$_POST['pass'],$_POST['newpassword'],$_POST['confirm'])){
     
        
        $username =$_POST['user']; 
        $password =($_POST['pass']);
        $newpassword = md5($_POST['newpassword']);
        $confirmnewpassword = md5($_POST['confirm']);

$result = mysql_query("SELECT password FROM users WHERE username ='$username' ");

if(!$result){
    echo 'username already exists';

}elseif($newpassword ==$confirmnewpassword){

    $sql = mysql_query("UPDATE users SET password ='$newpassword'   WHERE username = '$username'") or die(mysql_error());
    header("location:users.php");
}

            }

  
        


        ?>

<br>
<br>
<br>

<h1>Verander Gebruikersnaam</h1>
<table class="table table-bordered table-hover table-striped" id="edituser" style="table-layout: fixed">
<form method="POST" role="form" action="" id="editform">

<tr>
<td><label for="Username">Gebruikersnaam</label></td>
<td><input type="text" name="usertwo" placeholder="Gebruikersnaam"></td>
<td><label for="Password">Wachtwoord</label></td>
<td><input type="text" name="passtwo" placeholder="Wachtwoord"></td>
<td><label for="New Password">Nieuwe Gebruikersnaam</label></td>
<td><input type="text" name="newusername" placeholder="Nieuwe Gebruikersnaam"></td>
<td><label for="Confirm">Bevestig</label></td>
<td><input type="text" name="confirmusername" placeholder="Bevestig"></td>



<td><input type="submit" value="Verander Naam"></td>
</tr>
</form> 
</table>
<?php

include('db.php');
if(isset($_POST['usertwo'],$_POST['passtwo'],$_POST['newusername'],$_POST['confirmusername'])){
     
      
    
        $username =$_POST['usertwo']; 
        $password = md5($_POST['passtwo']);
        $newusername = $_POST['newusername'];
        $confirmnewusername = $_POST['confirmusername'];

$result = mysql_query("SELECT username FROM users WHERE username ='$username' ");

if(!$result){
    echo 'username already exists';

}elseif($newusername ==$confirmnewusername){

    $sql = mysql_query("UPDATE users SET username ='$newusername'   WHERE username = '$username'") or die(mysql_error());
    header("location:users.php");
}

            }

  
        


        ?>


<br>
<br>
<br>

<h1>Verander Content</h1>
<table class="table table-bordered table-hover table-striped" id="edituser" style="table-layout: fixed">
<form method="POST" role="form" action="" id="editform">

<tr>
<td><label for="id">Gebruikers Id</label></td>
<td><input type="text" name="id" placeholder="id"></td>
<td><label for="caption">Band + Album Titel</label></td>
<td><input placeholder="Band + Album Titel" name="caption" type="text"></td>
<td><label for="uitgave">Album Uitgave</label></td>
<td><textarea  placeholder="Album Uitgave" name="uitgave"></textarea></td>
<td><label for="genre">Album Genre</label></td>
<td><input placeholder="Album Genre"name="genre" type="text"></td>




<td><input type="submit" value="Verander Content"></td>
</tr>
</form> 
</table>
<?php 
include('db.php');
error_reporting(0);
if(isset($_POST['id'],$_POST['caption'],$_POST['uitgave'],$_POST['genre'])){
    $id = $_POST['id'];
    $caption =$_POST['caption'];
    $uitgave=$_POST['uitgave'];
    $genre=$_POST['genre'];
   

$query = mysql_query("SELECT id,caption,uitgave,genre FROM photo");




    $sql = mysql_query("UPDATE photo SET caption ='$caption',Uitgave = '$uitgave', genre = '$genre'   WHERE id = '$id'") or die(mysql_error());
    header("location:users.php");

}


?>



</div>
</body>
</html>
