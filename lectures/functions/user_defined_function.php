<?php

    // function printPrice () {
    //     static $price = 10;
    //     $price++;
    //     echo $price;
        
    // }

    // echo printPrice($price);
    // echo "<br>";
    //returning arrays 
    // function fix_names_array ($n1, $n2){
    //     $n1 = $n1 = ucfirst(strtolower($n1));
    //     $n2 = strtoupper($n2);
    //     return array($n1, $n2);
    // }
    // $names_array = fix_names_array("ROSHAN", "kaTEL");
    // echo $names_array[0];

    function test($number) {     
        test($number+1);
    }    
         
    echo test(1);  

?>