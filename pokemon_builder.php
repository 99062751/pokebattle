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
                if($pokemon->Resistance->name == $atck->type){
                    if($pokemon->name == "Magikarp"){
                        $newdamage= ($atck->damage) - ($pokemon->Resistance->value);
                        Pokemon::$hp_enemy= Pokemon::$hp_enemy - $newdamage;
                    }else{
                        $newdamage= ($atck->damage) - ($pokemon->Resistance->value);
                        Pokemon::$hp_pickachu= Pokemon::$hp_pickachu - $newdamage;
                    }
                    return $pokemon->name . " took " . $newdamage ." ". " " . $atck->type ." damage!";
                }elseif($pokemon->Weakness->name == $atck->type){
                    if($pokemon->name == "Magikarp"){
                        $newdamage= ($atck->damage) * ($pokemon->Weakness->value);
                        Pokemon::$hp_enemy= Pokemon::$hp_enemy - $newdamage;
                    }else{
                        $newdamage= ($atck->damage) * ($pokemon->Weakness->value);
                        Pokemon::$hp_pickachu= Pokemon::$hp_pickachu - $newdamage;
                    }
                return $pokemon->name . " took " . $newdamage . " " . $atck->type ." damage!";
                }else{
                    if($pokemon->name == "Magikarp"){
                        Pokemon::$hp_enemy= Pokemon::$hp_enemy - $atck->damage;
                    }else{
                        Pokemon::$hp_pickachu= Pokemon::$hp_pickachu - $atck->damage;
                    }
                    return $pokemon->name . " took " . $atck->damage . " " . $atck->type ." damage!";
                }
        }
        public static function printHealth($pokemon){
            if($pokemon->name == "Magikarp"){
                if(Pokemon::$hp_enemy > 0){
                    return $pokemon->name. " has only " . Pokemon::$hp_enemy. " hitpoints left!";
                }else{
                    return $pokemon->name . " Has been defeated!!"; 
                }
            }else{
                if(Pokemon::$hp_pickachu > 0){
                    return $pokemon->name. " has only " . Pokemon::$hp_pickachu. " hitpoints left!!";
                }else{
                    return $pokemon->name . " Has been defeated!!";
                }
            }
        }
    }

?>