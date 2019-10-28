<?php

  require('NiceDuration.php');
  
  $t = rand(0,999999999) ;
  
  $x = getNiceDuration($t) ;
  
  printf ( "R: %s \n" ) ; 
  
  ?>
