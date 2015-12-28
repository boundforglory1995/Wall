<?php

session_start();
unset($_SESSION['username']);
session_destroy();
 header("Refresh: 2; url= index.php");


?>