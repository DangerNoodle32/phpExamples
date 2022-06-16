<?php

    abstract class Pastry {

        /******************************************************************** */
            //  abstract class is different from normal class because we can have
            //  just the declaration of the method and also the method with 
            //  its implemetation. Also, it is different from the interface 
            //  because we can have implementation and just the declaration as 
            //  well. 
        /******************************************************************* */
        public abstract function bake();
        
        public function ingredients($ingredients){
            echo " using " . $ingredients;
        }
    }
?>