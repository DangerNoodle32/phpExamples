<?php

/******************************************************************************* */
// ^[_a-z0-9-] -> Matches the beginning of input of email with either _, a-z, 0-9, -. but nothing else besides them

// + -> Matches the preceding character one or more times. In our case, email must  begins with the things defined before + sign in the pattern. 
// And then only it will look for the things preceding.

// \ -> Marks the next character as either a special character or a literal. 
// \.[_a-z0-9-] -> this means we are able to use special characters and after that we have to use _, a-z, 0-9, or - and nothing else. 
// * -> Matches the preceding character zero or more times. For example, zo* matches either z or zoo.
// $ -> marks the end of the string
// {2,3} -> should have minimum 2 or maximum 3 times
// *(\.[a-z]{2,3}) -> Means that we NEED to use . and then characters from a-z which contains 2-3 characters.
/******************************************************************************* */
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
if( !preg_match ($pattern, $email) ){
    $email_error = "Email pattern is not valid";
    $flag = false;
} 


?>