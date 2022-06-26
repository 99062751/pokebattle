<?php
namespace app;
    class Attack{
        //private properties want protected overbodig
        private $name;
        private $type;
        private $damage; 
        private $Resistance;
        private $Weakness;

        //construct voor een nieuwe attack maken
        public function __construct($name, $egtp, $attackdamage, $rist, $weak){
            $this->name= $name;
            $this->type= $egtp;
            $this->damage= $attackdamage;
            $this->Resistance= $rist;
            $this->Weakness= $weak;
        }

        // getters en voor alle protected properties
        public function getname(){
            return $this->name;
        }

        public function gettype(){
            return $this->type;
        }

        public function getdamage(){
            return $this->damage;
        }

        public function getResistance(){
            return $this->Resistance;
        }

        public function getWeakness(){
            return $this->Weakness;
        }
    }