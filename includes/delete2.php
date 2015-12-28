<?php
include('db.php');


if(isset($_GET['del'])){
 $delete_id=$_GET['del'];
$delete_query="DELETE FROM users WHERE id='$delete_id'";//delete query
$run=mysql_query($delete_query) or die(mysql_error());
header("location:users.php");
}elseif(isset($_GET['deladmin'])){
	$delete_id=$_GET['deladmin'];
	$delete_query="DELETE FROM admin WHERE id='$delete_id'";//delete query
$run=mysql_query($delete_query) or die(mysql_error());
header("location:users.php");

}elseif(isset($_GET['delimg'])){

	$delete_id= $_GET['delimg'];
	$delete_query="DELETE FROM photo WHERE id='$delete_id'";
	$run=mysql_query($delete_query) or die(mysql_error());
header("location:images.php");
}else{

	echo'<h1>error</h1>';
}
