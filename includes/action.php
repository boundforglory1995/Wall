 <?php

 $action =(empty($_GET['action'])) ? '' : $_GET['action'];
 if($action == 'login'){  

 	 include("login.php");


 	
  }else if($action == 'logout'){
  	unset($_COOKIE['username']);
  	unset($_COOKIE['password']);
setcookie("username", "", time()-3600);
setcookie("password", "", time()-3600);

  }else if($action == 'register'){
  	include('register.php');
  }


