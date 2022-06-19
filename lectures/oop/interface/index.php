<?php

    //require_once "pastry.php";

    // $pastry = new Pastry();
    // $pastry->ingredients("Roshan");

    require_once "cookie.php";
    require_once "bread.php";

    $c = new Cookie();
    $c->bake();

    echo "<br>";

    $b = new Bread();
    $b->bake();
?>