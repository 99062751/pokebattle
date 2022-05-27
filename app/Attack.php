<?php
namespace app;
    class Attack{
        public $name;
        public $type;
        public $damage; 
        public $Resistance;
        public $Weakness;

        public function __construct($name, $egtp, $attackdamage, $rist, $weak){
            $this->name= $name;
            $this->type= $egtp;
            $this->damage= $attackdamage;
            $this->Resistance= $rist;
            $this->Weakness= $weak;
        }
    }