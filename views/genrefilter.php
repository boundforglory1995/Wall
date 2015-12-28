<?php

echo'<div id="wrapper">';
	$search_output2 ="";
	
	if(isset($_POST['filtergenre']) && $_POST['filtergenre'] != ""){
		$search_output ="";
		$searchquery =preg_replace('#[^a-z 0-9?]#i','', $_POST['filtergenre']);
		
		if($_POST['filtergenre'] == "Blackmetal"){
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%Blackmetal%'";
		}elseif($_POST['filtergenre'] == "Deathmetal") {
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%Deathmetal%'";
		}
		elseif($_POST['filtergenre'] == "Brutal Deathcore") {
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%Brutal Deathcore%'";
		}elseif($_POST['filtergenre'] == "Hardrock") {
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%Hardrock%'";
		}elseif($_POST['filtergenre'] == "Post-Hardcore") {
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%Post-Hardcore%'";
		}elseif($_POST['filtergenre'] == "Neo-Progressive Rock") {
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%Neo-Progressive Rock%'";
		}elseif($_POST['filtergenre'] == "Metalcore") {
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%Metalcore%'";
		}
		elseif($_POST['filtergenre'] == "Deathcore") {
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%Deathcore%'";
		}elseif($_POST['filtergenre'] == "Pop Rock") {
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%Pop Rock%'";
		}elseif($_POST['filtergenre'] == "Pop") {
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%Pop%'";
		}elseif($_POST['filtergenre'] == "Nederhop") {
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%Nederhop%'";
		}elseif($_POST['filtergenre'] == "Rap") {
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%Rap%'";
		}elseif($_POST['filtergenre'] == "Rap Metal") {
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%Rap Metal%'";
		}
		elseif($_POST['filtergenre'] == "Rapcore") {
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%Rapcore%'";
		}elseif($_POST['filtergenre'] == "Country") {
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%Country%'";
		}elseif($_POST['filtergenre'] == "Speed Metal") {
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%Speed Metal%'";
		}elseif($_POST['filtergenre'] == "Crunkcore") {
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%Crunkcore%'";
		}elseif($_POST['filtergenre'] == "Metal") {
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%Metal%'";
		}elseif($_POST['filtergenre'] == "RAC") {
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%RAC%'";
		}elseif($_POST['filtergenre'] == "Power Pop") {
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%Power Pop%'";
		}elseif($_POST['filtergenre'] == "Alternative Metal") {
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%Alternative Metal%'";
		}elseif($_POST['filtergenre'] == "Christian Post-Hardcore") {
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%Christian Post-Hardcore%'";
		}elseif($_POST['filtergenre'] == "Hardcore") {
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%Hardcore%'";
		}elseif($_POST['filtergenre'] == "Medolic Metal") {
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%Medolic Metal%'";
		}elseif($_POST['filtergenre'] == "Electronicore") {
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%Electronicore%'";
		}elseif($_POST['filtergenre'] == "Nu-Metal") {
			$sqlCommand ="SELECT * FROM photo WHERE genre LIKE '%Nu-Metal%'";
		}elseif($_POST['filtergenre'] == "Christian Brutal Deathmetal"){
			$sqlCommand= "SELECT * FROM photo WHERE genre LIKE '%Christian Brutal Deathmetal%'";
		
		}elseif($_POST['filtergenre'] == "Medolic Hardcore"){
			$sqlCommand= "SELECT * FROM photo WHERE genre LIKE '%Medolic Hardcore%'";
		
		}elseif($_POST['filtergenre'] == "Pop-Punk"){
			$sqlCommand= "SELECT * FROM photo WHERE genre LIKE '%Pop-Punk%'";
		
		}elseif($_POST['filtergenre'] == "Brutal Slamming Deathcore"){
			$sqlCommand= "SELECT * FROM photo WHERE genre LIKE '%Brutal Slamming Deathcore%'";
		
		}elseif($_POST['filtergenre'] == "Rock"){
			$sqlCommand= "SELECT * FROM photo WHERE genre LIKE '%Rock%'";
		
		}elseif($_POST['filtergenre'] == "Blues"){
			$sqlCommand= "SELECT * FROM photo WHERE genre LIKE '%Blues%'";
		
		}elseif($_POST['filtergenre'] == "Thrash Metal"){
			$sqlCommand= "SELECT * FROM photo WHERE genre LIKE '%Thrash Metal%'";
		
		}elseif($_POST['filtergenre'] == "Glam Rock"){
			$sqlCommand= "SELECT * FROM photo WHERE genre LIKE '%Glam Rock%'";
		
		}elseif($_POST['filtergenre'] == "Glam Metal"){
			$sqlCommand= "SELECT * FROM photo WHERE genre LIKE '%Glam Metal%'";
		
		}elseif($_POST['filtergenre'] == "Grindcore"){
			$sqlCommand= "SELECT * FROM photo WHERE genre LIKE '%Grindcore%'";
		
		}elseif($_POST['filtergenre'] == "Porngrind"){
			$sqlCommand= "SELECT * FROM photo WHERE genre LIKE '%Porngrind%'";
		
		}elseif($_POST['filtergenre'] == "Goregrind"){
			$sqlCommand= "SELECT * FROM photo WHERE genre LIKE '%Goregrind%'";
		
		}elseif($_POST['filtergenre'] == "Mathcore"){
			$sqlCommand= "SELECT * FROM photo WHERE genre LIKE '%Mathcore%'";
		
		}elseif($_POST['filtergenre'] == "Alternative Rock"){
            $sqlCommand ="SELECT * FROM photo WHERE genre LIKE '&Alternative Rock&'";

		}elseif($_POST['filtergenre'] == "Kadaver Rap"){
			$sqlCommand = "SELECT * FROM photo WHERE genre LIKE '%Kadaver Rap%'";
		}elseif($_POST['filtergenre'] == "Hardstyle"){
			$sqlCommand = "SELECT * FROM photo WHERE genre LIKE '%Hardstyle%'";

		}elseif($_POST['filtergenre'] == "Dubstep"){
			$sqlCommand = "SELECT * FROM photo WHERE genre LIKE '%Dubstep%'";
		}elseif($_POST['filtergenre'] == "Drum And Bass"){
			$sqlCommand = "SELECT * FROM photo WHERE genre LIKE '%Drum And Bass%'";
		}











		
		

$query = mysql_query($sqlCommand) or die(mysql_error());
		$count = mysql_num_rows($query);
		
		if($count >0){
			$search_output2 .="<p>$count results for<strong>$searchquery</strong>$sqlCommand</p>";
			while($row = mysql_fetch_array($query)){
		
       
		
		
		echo '<div class="wrap"><div class="crop"><a  data-toggle="modal" data-target="#Modal' .$row['id']. '"><img class="images" ' .$row['id'].  '" src ="' .$row['location']. '" alt="images"/></a></div></div>';
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
	
				$search_output2 .="Title name: $id -$title <br/>";
			}

		} else {
			$search_output2 .="<p>0 results for<strong>$searchquery</strong>$sqlCommand</p>";
		}

	}

echo '</div>';