<?php include('includes/db.php'); ?>
<html>
<head>
  <?php
session_start();
$counter_name = "counter.txt";

// Check if a text file exists. If not create one and initialize it to zero.
if (!file_exists($counter_name)) {
  $f = fopen($counter_name, "w");
  fwrite($f,"500000");
  fclose($f);
}

// Read the current value of our counter file
$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);

// Has visitor been counted in this session?
// If not, increase counter value by one
if(!isset($_SESSION['hasVisited'])){
  $_SESSION['hasVisited']="yes";
  $counterVal++;
  $counterVal = "50000";
  $f = fopen($counter_name, "w");
  fwrite($f, $counterVal);
  $counterVal="500000";
  fclose($f); 
}

echo "Jou Bezoekers Aantal $counterVal Met Deze Website";?>

  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/homepage.css">
  <script src="js/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
 
   
</head>
<body>
  <?php include('includes/ipblocker.php');?> 
  <section id="intro">
    <div id="intro-text">
      <!-- To change text go to scripts.js -->
      <h1><span id="fill-text"></span></h1>
      <div href="#about" id="scr-down">
        <h2><span>The Wall</span> Scroll</h2>
        <a href="#about">
          <img src="scr_down.png">
        </a> 
      </div>
    </div>
  </section>
  <section id="about">
    <article>
      <h5>The Wall Briefing</h5>
      <p>The Wall is een website, die afbeeldingen toont.</p><p>Hij staat online en heeft de volgende kenmerken</p> 
<p>afbeeldingen zijn klikbaar zodat ze groter worden weergegeven met de afbeeldingstitel.</p>
</p>
      <p>door een bezoeker afbeeldingen laat toevoegen waarbij:</p>
<p>een titel moet worden meegegeven.</p>
<p>de afbeeldingen verschillende afmetingen mogen hebben.</p>
<p>de afbeelding tags meegegeven kunnen worden.</p>
<p>Afbeeldingen worden weergegeven zonder dat er gaten vallen.</p>
<p>er is een roll-over effect voor apparaten met een muis; ter inspiratie</p>
<p>pagina is responsive: behalve op een desktop, ziet de pagina er optimaal uit op een tablet en een smartphone.
 </p>
    </article>
  </section>
  <section id="services">
    <h2><a href="wall.php">Ga naar The Wall</h2>
    <article>
      <?php
      $result = mysql_query("SELECT * FROM photo LIMIT 8");
     while($preview = mysql_fetch_array($result)){
     echo '<img  id="previewimages"src="'.$preview['location'].'">';
   }

   ?>
    </article>
  </section>



</body>
</html>