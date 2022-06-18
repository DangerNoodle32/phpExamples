<?php

    require_once "Pet.php";
    /*************************************************************** */
        // use the keyword extends while declaring class becacuse
        // this class Dog is inheriting properties from the base 
        // class called Pet.
    /***************************************************************** */
    class Dog extends Pet{
        
        private $tag = " ";

        /*******************************************************************/
            // Calling the parents and passing required arguments 
            // and then operating the parameters for this class i.e. tags
        /******************************************************************/


        //We are getting the values for $name, $owner, and $tag from index.php
        //We are forwarding the values for $name and $owner to the parrent class which
        //is in this case Pet.php

        //We are using the values for $tag on this class itself
        public function __construct($name, $owner, $tag){
            parent::__construct($name, $owner);
            $this->tag = $tag;
        }

        public function getTag() {
            return $this->tag;
        }
    }

?>