<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "invalidCCNumberException.php";

    try  {
        processCC();
    }
    catch (Exception $e) {
        echo $e->getMessage();
        echo $e->getLine();
        echo "<br>";
        echo $e->getPrevious()->getMessage();
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

    function validate ($number = null) {
        if(is_null($number)) {
            throw new InvalidCCNumberException();
        }
    }

    // investigate about named parameters. 

?>