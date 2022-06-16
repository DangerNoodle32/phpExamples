<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    include_once "catalog.php";

    $carol->setFriends($daniel);
    echo $carol->getFriends()[0]->getName();
    echo "<br>";

    $carol->setFriends($eliza);
    echo $carol->getFriends()[1]->getName();
    echo "<br>";

?>
