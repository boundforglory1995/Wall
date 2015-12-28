<?php

$bg = array('bg-01.jpg'); // images to choose from
  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = $bg[$i]; // set variable equal to which random filename was chosen