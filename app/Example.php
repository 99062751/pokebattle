<?php
namespace app;
    abstract class Example{
        public $name;
        public function __construct($name) {
          $this->name = $name;
        }
        abstract public function print(); 
      
    }


    class example2 extends Example{
        public function print() {
            return $this->name; 
        }
    }
?>