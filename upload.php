<?php
include('includes/db.php');

error_reporting(E_ALL);
error_reporting(0);
function findTags($data){
	$striped_code = strip_tags($data,'<br/>');
	if($data != $striped_code){
		return true;
	}else{
		return false;
	}

}



 


 function GetImageExtension($imagetype)
    {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }

     }


   

if (!isset($_FILES['image']['tmp_name'])) {
	echo "";

}

else{
	
	$file=$_FILES["image"]["tmp_name"];
    $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$imgtype=$_FILES["image"]["type"];
	$ext= GetImageExtension($imgtype);
	$image_name= addslashes($_FILES['image']['name']);
			
  
	
		
			
	move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);


	
	$location="photos/". $_FILES["image"]["name"];
   

   
		
		$caption =$_POST['caption'];
    $genre = $_POST['genre'];
	$uitgave =$_POST['uitgave'];
	$totaltime =$_POST['total'];
	$listen = $_POST['fulalbum'];
	
 

    if(!findTags($caption.$genre.$uitgave.$totaltime)){
    $capture_field_vals =""; 
			
		if(isset($_POST["mytext"])){ 

			foreach($_POST["mytext"] as $key => $text_field){
				echo'<br/>';
				$capture_field_vals .= $text_field."<br/>";
			}
		}
    
  
	

   		$query_upload="INSERT into photo (location,caption,tracks,genre,uitgave,total,fulalbum) VALUES  ('$location','$caption','$capture_field_vals','$genre','$uitgave','$totaltime','$listen')";
  		mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error());
    }
     
     header("location: wall.php");
	 exit();					
}


?>

