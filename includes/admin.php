<!DOCTYPE html>
<?php
include('db.php');

  if(isset($_POST['admin_name'],$_POST['admin_pass'])){
    $name=$_POST['admin_name'];  
    $pass=md5($_POST['admin_pass']);  
    
  
    $admin_query="SELECT * FROM admin WHERE admin_name='$name' AND admin_pass='$pass'";  
  
    $run_query=mysql_query($admin_query);  

$count=mysql_num_rows($run_query);
  if($count==1){
    // Set cookies. I set my cookies to last 24 hours
    $expires = 1 * 1000 * 60 * 60 * 24;
    setcookie("admin_name", $name, time()+$expires,'/');
    setcookie("admin_pass", $pass, time()+$expires,'/');
    
    // Re-direct to backend
    print "<script type='text/javascript'>window.location='admin.php';</script>";

} elseif(!isset($_COOKIE['admin_name'],$_COOKIE['admin_pass']))     {

    // Error Login so Re-direct to "index.php"

 
  header("location:../wall.php");

}
}



?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>

    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    
    <link href="simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                    <a href="Iplogs.php">Iplogs</a>
                </li>
            
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->

       

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
   

   

</body>

</html>