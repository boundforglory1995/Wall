<?php

if(isset($_COOKIE['username'])){
	echo'<div id="welcome">';
echo "Welcome " . $_COOKIE['username'] . "";
echo' ';

echo '<a  href="?action=logout">Logout</a>';
echo'</div>';

}
?>
 
