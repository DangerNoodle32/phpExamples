<?php
    // $pattern = '/[0-9]+/';  //checks if there is number
    // $data = 'aa38AA';
    
    // echo preg_match($pattern, $data);

    $pattern2 = '/php \d/i';
    $data2 = 'Christian hates PHP 99 PHP 99 PHP 99';

    $value=  preg_match_all($pattern2, $data2);

?>