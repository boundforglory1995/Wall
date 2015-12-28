<?php 
if(isset($_POST['submit'])){

$user = $_POST['username'];
$pass = md5($_POST['pass']);
$repeat =md5($_POST['rpass']);
$email =$_POST['email'];

$user = stripslashes($_POST['username']);
$pass = stripslashes($_POST['pass']);
$email =stripslashes($_POST['email']);
$repeat  = stripslashes($_POST['rpass']);

$user = mysql_real_escape_string($_POST['username']);
$pass = mysql_real_escape_string($_POST['pass']);
$repeat = mysql_real_escape_string($_POST['rpass']);
$email =mysql_real_escape_string($_POST['email']);
$pass= md5($_POST['pass']);
$repeat = md5($_POST['rpass']);

$query = mysql_query("INSERT INTO users(username,password,email) VALUES('$user','$pass','$email')");


}





?>