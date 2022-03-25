<?php
    class EnergyType extends Pokemon{
        public $name;
        public $type;

        public function __construct($name, $type){
            $this->name= $name;
            $this->type= $type;
            parent::__construct($name, $type);
        }        
    }