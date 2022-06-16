<?php
    $paper = array("copier" => "copier and multipurpose", "inkjet" => 'Inkjet printer');
    // foreach ($paper as $key => $value) 
    // {
    //     echo $value;
    // }

    /******************************  Numerically indexed array ************************************** */
    // Numerically indexed array has numerical index for each value. And in order to print them, you have to use
    // index number.

    $student_array = array("Roshan", "50", "Copenhagen"); 
    $arrlength = count($student_array);    
        // echo $student_array[0];
        // echo $student_array[1];
        // echo $student_array[2];
        for($i = 0; $i < $arrlength; $i++) {
            echo $student_array[$i];
            echo "<br>";
          }
        echo "<br/>";

    /*******************************    Numerically indexed array  ****************************** */


    /****************************** Associative array ************************************** */
    // Associative  array has key for  each value. And in order to print them, you have to use
    // foreach loop.

    $student_array = array("name" => "Roshan", "age" => "50", "address" => "Copenhagen"); 
    echo "<br />";
    echo "printing from array";
    echo $student_array['name'];  
    echo "<br />";
    echo "now we extract it using extract function"; 
    echo "<br />";
    extract($student_array);
    echo $name;
    echo "<br />";
    foreach ($student_array as $key => $value) 
    {
        echo $key ." => ". $value;
        echo "<br/>";
    }

    /*******************************    Associative array   ****************************** */

    /*******************************    Multidimensional array  ******************************* */

    // A multidimensional array is an array containing one or more arrays.
    $student_multidimensional_array = array(
        'name' => array("Roshan", "Christian", "Halfdan")
    );

    foreach($student_multidimensional_array as $std => $items){
        foreach($items as $key => $value){
            echo $key . " = " . $value . "<br>";
        }
    }

     /*******************************    Multidimensional array  ******************************* */


    /******************************  PHP array functions   ************************************** */ 

    // array_map
    // The array_map() function sends each value of an array to a user-made function, and returns an array with new values, given by the user-made function.
    $a=array("Horse","Dog","Cat");

    function myfunction($v)
    {
        if ($v==="Dog")
        {
        return "Fido";
        }
        return $v;
    }

    print_r(array_map("myfunction",$a));



    // usort
    // Sorts array in place by values using a user-supplied comparison function to determine the order.
    $a = array(4, 2, 8, 6);

    function my_sort($a, $b)
    {
        if ($a == $b) {
            return 0;
        }
        return ($a < $b) ? -1 : 1;
    }
    usort($a,"my_sort");

    // sort
    // sort arrays in ascending order
    $a = array(4, 2, 8, 6);
    sort($a);

    // shuffle
    // Randomize the order of the elements in the array
    $a = array(4, 2, 8, 6);
    shuffle($a);

    // explode
    // Break a string into an array:
    $str = "Hello world. It's a beautiful day.";
    print_r (explode(" ",$str));

    // extract
    // The extract() function imports variables into the local symbol table from an array.
    $student_array = array("name" => "Roshan", "age" => "50", "address" => "Copenhagen"); 
    echo "<br />";
    echo "printing from array";
    echo "<br />";
    echo $student_array['name'];  
    echo "<br />";
    echo "now we extract it using extract function"; 
    echo "<br />";
    extract($student_array);
    echo $name;
    echo "<br />";


    // compact
    // The compact() function creates an array from variables and their values.
    // Note: Any strings that does not match variable names will be skipped.
    $firstname = "Peter";
    $lastname = "Griffin";
    $age = "41";    

    $result = compact("firstname", "lastname", "age");

    print_r($result);


    // reset
    // The reset() function moves the internal pointer to the first element of the array.
    $people = array("Peter", "Joe", "Glenn", "Cleveland");

    echo current($people) . "<br>";
    echo next($people) . "<br>";

    echo reset($people);

    // end
    // The end() function moves the internal pointer to, and outputs, the last element in the array.
    $people = array("Peter", "Joe", "Glenn", "Cleveland");
    echo current($people) . "<br>";
    echo end($people);

    /******************************  PHP array functions   ************************************** */ 


    $products = array(
            'paper' => array(
                'copier' => "Copier & Multipurpose",
                'inkjet' => "Inkjet Printer"
            ),
            'pens' => array(
                'ball' => "Ball point",
                'hilite' => "Highliters",
                'marker' => "Markers"
            ),
            'misc' => array(
                'tape' => "Sticky Tape",
                'glue' => "Adhesives"
            )
        );
    echo "<pre>";
    foreach($products as $section => $items){
        foreach($items as $key => $value){
            echo $key . " = " . $value . "<br>";
        }
    }
    echo "</pre>";
?>