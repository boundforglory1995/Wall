  <?php
  $blacklist_ip_range = array( //allowed ips array pregmatch php
    '/^172\.17\.(\d+)\.(\d+)/', //van ip tot 172.17.0.0 - 172.17.255.255
    '/^172\.(\d+)\.(\d+)\.(\d+)/',//van ip tot 172.0.0.0 - 172.255.255.255
     
    );

    foreach( $blacklist_ip_range as $ip ) { // kijk welke ips er in de array zitten en checkt met pregmatch
    if( preg_match( $ip, $_SERVER['REMOTE_ADDR'] )){
          
    ?><script>alert("Ip Adressen niet toegestaan");</script><?php // alert in javascript
    header("Refresh:1;Url=http://www.google.com/"); // redirect in 1 seconde naar google.com
   exit();


}
}
$logbestand = "true";
  $tmp_file_ip_logs = 'ips.txt'; // maakt een bestand waar hij de ips in opslaat
  $errorbestand = "false";
   if(!empty($_SERVER['HTTP_CLIENT_IP'])){ // begin check of $_server leeg is
      $ipadress=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      $ipadress=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else{
      $ipadress=$_SERVER['REMOTE_ADDR'];
    } // einde lege check
    if($ipadress === "::1"){ // convert ::1 naar 127.0.0.1
      $ipadress = "127.0.0.1"; 
    }  
    

    $hostip = gethostbyaddr($_SERVER['REMOTE_ADDR']);  //geeft host naam van ip
    $datum = date('d-m-Y/H:i:s'); // geeft datum mee van ip

  

  


    $query_iplogs = "INSERT into iplogs(ips,host,datum) values('$ipadress','$hostip','$datum')"; // stopt ip met host en datum in database
    mysql_query($query_iplogs) or die("error in $query_upload == ----> ".mysql_error()); // helpt voor error kijken met de query
     
  if($logbestand == 'true') { 

    if($errorbestand == 'true') { 

        if(!$fp = fopen($tmp_file_ip_logs, "a")) {
        echo "($tmp_file_ip_logs) kan niet geopent worden";
        exit;
        }
        if(!fputs($fp,"
        $ipadress, ($hostip), ($datum)
        ")) {
        echo "Het bestand kon niet worden beschreven!";
        exit;
        }
        flock($fp, 3);
        fclose($fp);

    } else {

        $fp = fopen($logbestand, "a");
        fputs($fp,"
        $ipadress, ($hostip), ($datum)
        ");
        flock($fp, 3);
        fclose($fp);

    }

}



  echo $ipadress;?> 