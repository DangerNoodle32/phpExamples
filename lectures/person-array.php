<?php
    $person = array ( );
    $person[0] = 'Ole';
    $person[1] = 'Hans';
    $person[ ] = 'Niels';
    $person[7] = 'Villy';
    $person[ ] = 'Henrik';
    $person['name'] = 'Kristian';
    $person[10] = array ('First Name'=> 'Jan' , 'Sure Name' => 'Johansen', 'Tlf' => 28356208);

    foreach($person as $index => $item){
        if(is_array($item)){
           foreach($item as $key => $value){
               echo $value . "<br>";
           }
        }
        else {
            echo "Index is ". $index." value is ". $item . " <br>";
        }
    }
?>