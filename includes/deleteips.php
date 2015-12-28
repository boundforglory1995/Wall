<?php
include('db.php');


if(isset($_GET['del'])){
 $delete_id=$_GET['del'];
$delete_query="DELETE FROM iplogs WHERE id='$delete_id'";//delete query
$run=mysql_query($delete_query) or die(mysql_error());
header("location:Iplogs.php");
}else{
	echo '<h1>error</h1>';
}
