<?php
namespace app;
    class EnergyType{
        //private properties want protected overbodig
        private $name;
        private $type;

        public function __construct($name, $type){
            $this->name= $name;
            $this->type= $type;
        }        
        // alle getters voor private properties
        public function getname(){
            return $this->name;
        }

        public function gettype(){
            return $this->value;
        }
    }
    
