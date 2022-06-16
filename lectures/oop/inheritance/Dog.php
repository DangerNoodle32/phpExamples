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
        public function __construct($name, $owner, $tag){
            parent::__construct($name, $owner);
            $this->tag = $tag;
        }

        public function getTag() {
            return $this->tag;
        }
    }

?>