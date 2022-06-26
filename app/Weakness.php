<?php
namespace app;
    class Weakness {
        //private properties want protected overbodig
        private $name; 
        private $value;

        // construct zodat er een nieuwe weakness kan worden gemaakt
        public function __construct($name, $value){
            $this->name= $name; 
            $this->value= $value;
        }
    // getters en voor alle private properties
        public function getname(){
            return $this->name;
        }

        public function getvalue(){
            return $this->value;
        }
    }
