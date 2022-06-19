<?php
    require_once "pastry.php";

    class Bread extends Pastry{

        public function bake() {
            echo 'Baking a Bread';
            echo $this->Ingredients('sugar, flour, milk, salt, water');
        }
    }
?>