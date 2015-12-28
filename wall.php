<?php 

include('views/background.php');
include('includes/db.php');
include("includes/id.php"); 
include_once("includes/ipchecker.php");
include('includes/action.php');


include("addexec.php");
include('views/header.php');
include('views/navbarheader.php');
include("includes/pagination.php");
include("views/form.php");
if(isset($_COOKIE['username'])){
	?>
  <script>
$(document).ready(function(){
	$('.pagination').hide();
    $('#loginbut').hide();
	$('#registerbut').hide();
	$('')

});
  </script>
	<?php
}

include('views/welcomeuser.php');
include('views/logo.php');
include("includes/output.php");