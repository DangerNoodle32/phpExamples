<?php
    require_once "interface.php";
    
    class poly_writer_JSONWriter implements Ipoly_writer_Writer {
        // write method 
        public function write(poly_base_Article $obj) {
            $array = array('article' => $obj);
            return json_encode($array);
        }
    }
?>