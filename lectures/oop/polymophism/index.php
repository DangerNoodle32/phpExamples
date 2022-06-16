<?php

    require_once "base_Article.php";
    require_once "base_Factory.php";

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $article = new poly_base_Article('Polymorphism', 'Steve', time(), 0);
    //$factory = new poly_base_Factory();
   
    
    try {
        $writer = poly_base_Factory::getWriter();
        }
    catch (Exception $e) {
        echo $e->getMessage();
        $writer = new poly_writer_XMLWriter();
    }

    echo $article->write($writer);

?>