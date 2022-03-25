<?php
    require "Attack.php";
    class Pokemon {
        public $name;
        public $EnergyType;
        public $hitpoints;
        public $Attacks;
        public $Weakness;
        public $Resistance;
        public $damage;

        public function __construct($name, $EnergyType, $hitpoints, $Attacks, $Weakness, $Resistance)
        {
            $this->name = $name;
            $this->EnergyType = $EnergyType;
            $this->hitpoints = $hitpoints;
            $this->Attacks = $Attacks;
            $this->damage= $attackdamage;
            $this->Weakness = $Weakness;
            $this->Resistance = $Resistance;
        }

        public function execute_attack($atcks, $attacknumber, $enemy){
            $atck=  $atcks[$attacknumber];

            if($enemy->Resistance == $atck->type){
                var_dump($enemy->Weakness == $atck->type);
                 $newdamage= ($atck->damage) - ($atck->Resistance);
                return $enemy->name . " took " . $newdamage ." ". $atck->type ." damage!";
            }elseif($enemy->Weakness == $atck->type){
               $newdamage= $atck->damage + $atck->Weakness;
               $enemy->name . " took " . $newdamage . $atck->type ." damage!";
           }else{
               return "RIP!";
           }
        }   
    }
?>