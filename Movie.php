<?php
class Movie {
    public $title;
    public $date;
    public $athor;


    function __construct($_title) {
        $this->title = $_title;
    }

    public function getDescription($length = 20) {
        return substr($this->description, 0, $length) . "...";
     }

}