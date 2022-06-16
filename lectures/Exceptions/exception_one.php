<?php

function processCC($number = null) {
    if(is_null($number)) {
      throw new Exception("No CC number");
    }
    echo "processed";
  }
  
  //trigger exception in a "try" block
try {
    processCC(1);
  }
  
//catch exception
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
    }

?>