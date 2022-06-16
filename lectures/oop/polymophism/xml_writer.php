<?php

    require_once "interface.php";


    class poly_writer_XMLWriter implements Ipoly_writer_Writer {
        //write method
        public function write(poly_base_Article $obj) {
            $ret = '<article>';
            $ret .= '<title>' . $obj->title . '</title>';
            $ret .= '<author>' . $obj->author . '</author>';
            $ret .= '<date>' . $obj->date . '</date>';
            $ret .= '<category>' . $obj->category . '</category>';
            $ret .= '</article>';
            return $ret;
        }
    }
?>