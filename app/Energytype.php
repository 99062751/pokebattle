<?php
namespace app;
    class EnergyType{
        private $name;
        private $type;

        public function __construct($name, $type){
            $this->name= $name;
            $this->type= $type;
        }        

        public function getname(){
            return $this->name;
        }

        public function gettype(){
            return $this->value;
        }
    }

    //inheritance toevoegen en nieuwe klas maken pickachu en magikarp 
    // opzoeken hoe ik dat moet doen
    // statics implementeren
    
