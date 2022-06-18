<?php

    require_once "Pet.php";

    /*********************************************************** */
        // use the keyword extends while declaring class becacuse
        // this class Dog is inheriting properties from the base 
        // class called Pet.
    /************************************************************ */

    class Cat extends Pet{

        /**************************************************************** */
            // overriding method 
            // we are writing the same method called play() in child
            // but the operations inside the method are different than 
            // that in the parents
        /*************************************************************** */
        
        public function play() {
            return $this->name . ' is climbing';
        }

        /************************************************************************** */
        // A destructor is called when the object is destructed or the script is stopped or exited.
        // If you create a __destruct() function, PHP will automatically call this function at the end of the script.
        // Notice that the destruct function starts with two underscores (__)!
        // The example below has a __construct() function that is automatically called when you create an object from a class, and a __destruct() function that is automatically called at the end of the script:
        /************************************************************************** */
        public function __destruct(){
            print "Destroying " . __CLASS__ . "\n";
        }
        
    }

?>