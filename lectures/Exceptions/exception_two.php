<?php


    function validate ($number = null) {
        if(is_null($number)) {
            throw new Exception("No CC number");
        }
    }

    function processCC($number = null) {
        //trigger exception in a "try" block
        try {
            validate($number);
        }
        
        //catch exception
        catch(Exception $e) {
            throw new Exception("invalid card number", null, $e);
        }
    }

    try  {
        processCC();
    }
    catch (Exception $e) {
        echo $e->getMessage();
        echo "<br>";
        echo $e->getPrevious()->getMessage();
    }


?>