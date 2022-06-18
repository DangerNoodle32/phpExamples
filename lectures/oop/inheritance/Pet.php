<?php
    // parent or base class
    class Pet {

        /**************************************************************/
            // class can have two properties, they are data and behaviour
            // datas are the variables properties
            // behaviour are the functions or methods called in oop
        /************************************************************* */

        protected $name = " ";
        protected $owner = " ";

         /****************************************************************/
            // Instead of using the setName method we can also make
            // use of constructor to set the property name. 
        /****************************************************************/
        public function __construct($newName, $newOwner) {
            $this->name = $newName;
            $this->owner = $newOwner;
        }

        // methods
        public function getName() {
            return $this->name;
        }

        public function getOwner() {
            return $this->owner;
        }

        public function play() {
            return $this->name ." is playing";
        }

    }
?>