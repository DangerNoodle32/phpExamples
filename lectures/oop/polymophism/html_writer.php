<?php
    require_once "interface.php";
    
    class poly_writer_HTMLWriter implements Ipoly_writer_Writer {
        // write method 
        public function write(poly_base_Article $obj) {
            return "<h1>HTML format from here</h1>";
        }
    }
?>