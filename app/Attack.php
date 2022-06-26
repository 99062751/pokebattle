<?php
// properties op private zetten
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
        // public function getname(){
        //     return $this->name;
        // }

        // public function gettype(){
        //     return $this->type;
        // }

        // public function getdamage(){
        //     return $this->damage;
        // }

        // public function getResistance(){
        //     return $this->Resistance;
        // }

        // public function getWeakness(){
        //     return $this->Weakness;
        // }
        // getter functies en dan fucntie aanroepen pokemon
    }

    // zelfde doen voor alle andere subclasses