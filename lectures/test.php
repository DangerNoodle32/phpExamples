<?php
    $paper = array("copier" => "copier and multipurpose", "inkjet" => 'Inkjet printer');
    // foreach ($paper as $key => $value) 
    // {
    //     echo $value;
    // }

    $products = array(
            'paper' => array(
                'copier' => "Copier & Multipurpose",
                'inkjet' => "Inkjet Printer"
            ),
            'pens' => array(
                'ball' => "Ball point",
                'hilite' => "Highliters",
                'marker' => "Markers"
            ),
            'misc' => array(
                'tape' => "Sticky Tape",
                'glue' => "Adhesives"
            )
        );
    echo "<pre>";
    foreach($products as $section => $items){
        foreach($items as $key => $value){
            echo $key . " = " . $value . "<br>";
        }
    }
    echo "</pre>";
?>