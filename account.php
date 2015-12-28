<?php 


$mysql_hostname = "localhost";
$mysql_user = "darkn_nl_Wall";
$mysql_password = "Punter14";
$mysql_database = "darknessdevelopment_nl_Wall";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
if(isset($_COOKIE['username'])){

$queryuser = "SELECT * FROM photo WHERE user = '".$_COOKIE['username']."'";
$result=mysql_query($queryuser);//here run the sql query.
echo '<div id="wrapper">';
        while($row=mysql_fetch_array($result))//while look to fetch the result and store in a array $row.
        {  
        	
      

		echo '<div class="wrap"><div class="crop"><a  data-toggle="modal" data-target="#Modal' .$row['id']. '"><img class="images" ' .$row['id'].  '" src ="' .$row['location']. '" alt="images" /></a></div></div>';
    
		

		echo '<div class="modal fade" id="Modal' .$row['id']. '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
		echo '<div class="modal-dialog">';
		echo '<div class="modal-content">';
		echo '<div class="modal-header"><button class="btn" id="but" data-dismiss="modal" aria-hidden="true">Close</button>';
		echo '<h4 class="modal-title" id="myModalLabel">' . $title= $row['caption'] . '</h4>';
		echo '</div>';
		echo ' <div class="modal-body-2">';
			echo'<img width="100%"  class="imgs" ' .$row['id'].  '" src ="' .$row['location']. '" alt="images" />' ;
		echo '<div id="tracks">';
		 echo' <a href="delete.php?del='.$row['id'].'"><button class="btn btn-danger">Delete</button></a></td>';
		echo"<br/>";
		echo $row['tracks']."</br>";
        echo $row['Uitgave']."</br>";
		echo $row['genre']."</br>";
		echo $row['total']."</br>";
				 echo'<iframe width="300" height="315" '.$row['id'].'" src="'.$row['fulalbum'].'" frameborder="0" ></iframe>';

		 echo "</div>";
	

        
		
		
		echo '</div>';
		echo '<div class="modal-footer">';
		echo '  </div>';
		echo '  </div>';
		echo ' </div>';
		echo '</div>';
	


	



}
echo'</div>';

            
            
}





