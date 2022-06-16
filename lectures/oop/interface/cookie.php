<?php
    require_once "pastry.php";

    class Cookie extends Pastry{

        public function bake() {
            echo ' Baking a Cookie';
            echo $this->Ingredients('sugar, flour');
        }
    }
?>