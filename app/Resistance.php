<?php
namespace app;
    class Resistance {
        private $name; 
        private $value;

        public function __construct($name, $value){
            $this->name= $name; 
            $this->value= $value;
        }

        public function getname(){
            return $this->name;
        }

        public function getvalue(){
            return $this->value;
        }
    }
