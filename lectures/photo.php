<?php 
    $name = $_POST["name"]; 
    $photo["David"] = "img/avatar.svg";
    $photo["Arne"] = "img/avatar.svg";
    $photo["Niels"] = "img/avatar.svg";

    if(array_key_exists($name, $photo)){
        echo "photo of" . $name;
        echo "<img width='300' src='$photo[$name]' >";
    }
    else {
       echo "we could not find the photo in our database";
    }

?>