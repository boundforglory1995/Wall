<?php
include("./includes/equallocal.php");
localhostChecker($ipadress);
 echo '<div id="wrapper">';

	$result = mysql_query("SELECT *FROM photo ORDER BY RAND() DESC limit  $start, $limit ");

	while($row = mysql_fetch_array($result)){
		
		if($search_output){
			break;
			     
		
		}elseif ($search_output2) {
			break;
		}elseif(isset($_COOKIE['username'])){
			break;
		}
 	
            

     


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



