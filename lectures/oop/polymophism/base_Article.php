<?php
    require_once "interface.php";
    require_once "json_writer.php";
    require_once "xml_writer.php";
    require_once "html_writer.php";

    class poly_base_Article {
        public $title;
        public $author;
        public $date;
        public $category;
    
        public function  __construct($title, $author, $date, $category = 0) {
            $this->title = $title;
            $this->author = $author;
            $this->date = $date;
            $this->category = $category;
        }

        public function write(Ipoly_writer_Writer $writer) {
            return $writer->write($this);
        }
        
    }
?>