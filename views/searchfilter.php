<?php
echo '<div id="wrapper">';
$search_output ="";
	
	if(isset($_POST['searchquery']) && $_POST['searchquery'] != ""){
		$search_output ="";
		$searchquery =preg_replace('#[^a-z 0-9?]#i','', $_POST['searchquery']);
		
		if($_POST['filter1'] == "Alles"){
			$sqlCommand ="SELECT * FROM photo WHERE caption LIKE '%$searchquery%'";
		} 
		else if($_POST['filter1'] == "Uitgave"){
			$sqlCommand = "SELECT * FROM photo WHERE uitgave LIKE '%$searchquery%'";
		}
		else if($_POST['filter1'] == "Genre"){
			$sqlCommand = "SELECT * FROM photo WHERE genre LIKE '%$searchquery%'";
		}
		else if($_POST['filter1'] == "Tracks"){
			$sqlCommand = "SELECT * FROM photo WHERE tracks LIKE '%$searchquery%'";	
		}
		else if($_POST['filter1'] == "Totaal"){

			$sqlCommand = "SELECT * FROM photo WHERE total '%$searchquery%'";
		}

		$query = mysql_query($sqlCommand) or die(mysql_error());
		$count = mysql_num_rows($query);
		
		if($count >0){
			$search_output .="<p>$count results for<strong>$searchquery</strong>$sqlCommand</p>";
			while($row = mysql_fetch_array($query)){
		
       
		
		
		echo '<div class="wrap"><div class="crop"><a  data-toggle="modal" data-target="#Modal' .$row['id']. '"><img class="images" ' .$row['id'].  '" src ="' .$row['location']. '" alt="images" /></a></div></div>';
		echo '<div class="modal fade" id="Modal' .$row['id']. '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
		echo '<div class="modal-dialog">';
		echo '<div class="modal-content">';
		echo '<div class="modal-header"><button class="btn" id="but" data-dismiss="modal" aria-hidden="true">Close</button>';
		echo '<h4 class="modal-title" id="myModalLabel">' . $title= $row['caption'] . '</h4>';
		echo '</div>';
		echo ' <div class="modal-body-2">';
		echo'<img width="100%"  class="imgs" ' .$row['id'].  '" src ="' .$row['location']. '" alt="images"/>' ;


		echo '<div id="tracks">';
		echo"<br/>";
		echo $row['tracks']."</br>";
        echo $row['Uitgave']."</br>";
		echo $row['genre']."</br>";
		echo $row['total']."<br/>";
		 echo'<iframe width="300" height="315" '.$row['id'].'" src="'.$row['fulalbum'].'" frameborder="0" ></iframe>';

		 echo "</div>";
		

		
		
		echo '</div>';
		echo '<div class="modal-footer">';
		echo '  </div>';
		echo '  </div>';
		echo ' </div>';
		echo '</div>';
	
				$search_output .="Title name: $id -$title <br/>";
			}

		} else {
			$search_output .="<p>0 results for<strong>$searchquery</strong>$sqlCommand</p>";
		}

	}
echo '</div>';