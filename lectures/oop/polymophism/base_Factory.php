<?php

    require_once "json_writer.php";
    require_once "xml_writer.php";

    class poly_base_Factory {

        public static function getWriter() {
            // grab request variable
            $format = $_REQUEST['format'];
            echo $format;
            // construct our class name and check its existence
            $class = 'poly_writer_' . $format . 'Writer';
            if(class_exists($class)) {
                // return a new Writer object
                /************************************** */
                    // For example new poly_writer_XMLwriter()
                /*********************************** */
                return new $class();
            }
            // otherwise we fail
            throw new Exception('Unsupported format');
        }
    }

?>