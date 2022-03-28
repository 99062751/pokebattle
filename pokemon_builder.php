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
        public static $hp_enemy;
        public static $hp_pickachu;

        public function __construct($name, $EnergyType, $hitpoints, $Attacks, $Weakness, $Resistance)
        {
            $this->name = $name;
            $this->EnergyType = $EnergyType;
            $this->hitpoints = $hitpoints;
            $this->Attacks = $Attacks;
            $this->damage= $attackdamage;
            $this->Weakness = $Weakness;
            $this->Resistance = $Resistance;
            Pokemon::$hp_enemy= $hitpoints;
            Pokemon::$hp_pickachu= 100;
        }

        public function execute_attack($atcks, $attacknumber, $pokemon){
                $atck=  $atcks[$attacknumber];
                if($pokemon->Resistance == $atck->type){
                    if($pokemon->name == "Magikarp"){
                        $newdamage= ($atck->damage) - ($atck->Resistance);
                        Pokemon::$hp_enemy= Pokemon::$hp_enemy - $newdamage;
                    }else{
                        $newdamage= ($atck->damage) - ($atck->Resistance);
                        Pokemon::$hp_pickachu= Pokemon::$hp_pickachu - $newdamage;
                    }
                    return $pokemon->name . " took " . $newdamage ." ". " " . $atck->type ." damage!";
                }elseif($pokemon->Weakness == $atck->type){
                    if($pokemon->name == "Magikarp"){
                        $newdamage= ($atck->damage) + ($atck->Weakness);
                        Pokemon::$hp_enemy= Pokemon::$hp_enemy - $newdamage;
                    }else{
                        $newdamage= ($atck->damage) - ($atck->Weakness);
                        Pokemon::$hp_pickachu= Pokemon::$hp_pickachu - $newdamage;
                    }
                return $pokemon->name . " took " . $newdamage . " " . $atck->type ." damage!";
                }else{
                    if($pokemon->name == "Magikarp"){
                        Pokemon::$hp_enemy= Pokemon::$hp_enemy - $atck->damage;
                    }else{
                        $newdamage= ($atck->damage) - ($atck->Weakness);
                        Pokemon::$hp_pickachu= Pokemon::$hp_pickachu - $atck->damage;
                    }
                    return $pokemon->name . " took " . $atck->damage . " " . $atck->type ." damage!";
                }
        }
        public static function printHealth($pokemon){
            if($pokemon->name == "Magikarp"){
                if($pokemon->hitpoints <= 0){
                    return $pokemon->name . " Has been defeated!!"; 
                }else{
                    return $pokemon->name. " has only " . Pokemon::$hp_enemy. " hitpoints left!";
                }
            }else{
                if($pokemon->hitpoints <= 0){
                    return $pokemon->name . " Has been defeated!!";
                }else{
                    return $pokemon->name. " has only " . Pokemon::$hp_pickachu. " hitpoints left!!";
                }
            }
        }
    }

?>