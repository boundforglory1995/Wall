<?php
include('includes/db.php');
error_reporting(E_ALL);

function resize($width, $height){
  list($w, $h) = getimagesize($_FILES['image']['tmp_name']);
  
  $ratio = max($width/$w, $height/$h);
  $h = ceil($height / $ratio);
  $x = ($w - $width / $ratio) / 2;
  $w = ceil($width / $ratio);
  $path = 'photos/'.$width.'x'.$height.'_'.$_FILES['image']['name'];

  $imgString = file_get_contents($_FILES['image']['tmp_name']);
    $image = imagecreatefromstring($imgString);
  $tmp = imagecreatetruecolor($width, $height);
  imagecopyresampled($tmp, $image,
    0, 0,
    $x, 0,
    $width, $height,
    $w, $h);
  /* Save image */
  switch ($_FILES['image']['type']) {
    case 'image/jpeg':
      imagejpeg($tmp, $path, 100);
      break;
    case 'image/png':
      imagepng($tmp, $path, 0);
      break;
    case 'image/gif':
      imagegif($tmp, $path);
      break;
    default:
      exit;
      break;
  }
  return $path;
  /* cleanup memory */
  imagedestroy($image);
  imagedestroy($tmp);
}

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

   $max_file_size = 1024*200; // 200kb
$valid_exts = array('jpeg', 'jpg', 'png', 'gif');
// thumbnail sizes
$sizes = array(100 => 100, 150 => 150, 250 => 250);



   

if (!isset($_FILES['image']['tmp_name'])) {
	echo "";

} 


else{
	 if( $_FILES['image']['size'] < $max_file_size ){
    // get file extension
    $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
    if (in_array($ext, $valid_exts)) {
      /* resize image */
      foreach ($sizes as $w => $h) {
        $files[] = resize($w, $h);
      }

    } else {
      $msg = 'Unsupported file';
    }
  } 
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
	$username = $_COOKIE['username'];
 
    

    if(!findTags($caption.$genre.$uitgave.$totaltime)){
      	$capture_field_vals ="";
		
		
  
	
		if(isset($_POST["mytext"])){    
			foreach($_POST["mytext"] as $key => $text_field){
				echo'<br/>';
				$capture_field_vals .= $text_field."<br/>";
			}
		}

   		$query_upload="INSERT into photo (location,caption,tracks,genre,Uitgave,user,total,fulalbum) VALUES  ('$location','$caption','$capture_field_vals','$genre','$uitgave','$username','$totaltime','$listen')";
  		mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error());
    }
     
	 header("location: wall.php");
	 exit();					
}


?>

