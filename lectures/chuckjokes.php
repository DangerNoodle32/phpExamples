<?php 
    $day = $_POST["day"]; 
    $current_day = date('l');
    $chuckJokes['Monday'] = "He makes onion cry";
    $chuckJokes['Tuesday'] = "He does not sleep. He waits.";
    $chuckJokes['Wednesday'] = "He drinks napalm to fight his heartburn.";
    $chuckJokes['Thursday'] = "He can do a wheelie on a unicycle.";
    $chuckJokes['Friday'] = "The dark is afraid of Chuck Norris.";

    if(array_key_exists($day, $chuckJokes)){
        echo "Today is " . $current_day. " And chuck is saying" . "<br>";
        echo "<b>" .$chuckJokes[$current_day] . "</b>";
    }
    else {
       echo "Today is weekend.";
    }

?>