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
        public function __destruct(){
            print "Destroying " . __CLASS__ . "\n";
        }
        
    }

?>