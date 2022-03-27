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
        public static $hp;

        public function __construct($name, $EnergyType, $hitpoints, $Attacks, $Weakness, $Resistance)
        {
            $this->name = $name;
            $this->EnergyType = $EnergyType;
            $this->hitpoints = $hitpoints;
            $this->Attacks = $Attacks;
            $this->damage= $attackdamage;
            $this->Weakness = $Weakness;
            $this->Resistance = $Resistance;
            Pokemon::$hp= $hitpoints;
        }

        public function execute_attack($atcks, $attacknumber, $pokemon){
            if($pokemon->name == "Magikarp"){
                $atck=  $atcks[$attacknumber];
                if($pokemon->Resistance == $atck->type){
                    $newdamage= ($atck->damage) - ($atck->Resistance);
                    Pokemon::$hp= Pokemon::$hp - $newdamage;
                    var_dump(Pokemon::$hp - $newdamage);
                    
                    return $pokemon->name . " took " . $newdamage ." ". " " . $atck->type ." damage!";
                }elseif($pokemon->Weakness == $atck->type){
                    $newdamage= $atck->damage + $atck->Weakness;
                    Pokemon::$hp= Pokemon::$hp - $newdamage;
                    var_dump("eeeee ". Pokemon::$hp - $newdamage);
                return $pokemon->name . " took " . $newdamage . " " . $atck->type ." damage!";
                }else{
                    Pokemon::$hp= Pokemon::$hp - $atck->damage;
                    var_dump(Pokemon::$hp - $atck->damage);
                        return $pokemon->name . " took " . $atck->damage . " " . $atck->type ." damage!";
                }
            }else{
                return "nope";
            }
        }
        public static function printHealth($pokemon){
            return $pokemon->name. " has only " . Pokemon::$hp. " hitpoints left!";
        }
    }

?>