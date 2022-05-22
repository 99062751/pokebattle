<?php
    require "Attack.php";
    class Pokemon {
        protected $name;
        public $EnergyType;
        public $hitpoints;
        public $Attacks;
        public $Weakness;
        public $Resistance;
        public $damage;
        public static $hp_magikarp;
        public static $hp_pickachu;

        // getter and setter voor functienaam en maak het protected samen met de var
        // protected function getterget_name(){
        //     return $this->name;
        // }
        
        // protected function setterset_name(){
        //  $this->name = "ok";
        // }
        
        public function __construct($name, $EnergyType, $hitpoints, $Attacks, $Weakness, $Resistance)
        {
            $this->name = $name;
            $this->EnergyType = $EnergyType;
            $this->hitpoints = $hitpoints;
            $this->Attacks = $Attacks;
            $this->damage= $attackdamage;
            $this->Weakness = $Weakness;
            $this->Resistance = $Resistance;
            $this->hp_picka= 
            Pokemon::$hp_magikarp= $hitpoints;
            Pokemon::$hp_pickachu= 100;
        }

        public function getname(){
            return $this->name; 
        }

        public function execute_attack($atcks, $attacknumber, $pokemon){
                $atck=  $atcks[$attacknumber];
                if($pokemon->Resistance->name == $atck->type){
                    if($pokemon->name == "Magikarp"){
                        $newdamage= ($atck->damage) - ($pokemon->Resistance->value);
                        Pokemon::$hp_magikarp= Pokemon::$hp_magikarp - $newdamage;
                    }else{
                        $newdamage= ($atck->damage) - ($pokemon->Resistance->value);
                        Pokemon::$hp_pickachu= Pokemon::$hp_pickachu - $newdamage;
                    }
                    return $pokemon->name . " took " . $newdamage ." ". " " . $atck->type ." damage!";
                }elseif($pokemon->Weakness->name == $atck->type){
                    if($pokemon->name == "Magikarp"){
                        $newdamage= ($atck->damage) * ($pokemon->Weakness->value);
                        Pokemon::$hp_magikarp= Pokemon::$hp_magikarp - $newdamage;
                    }else{
                        $newdamage= ($atck->damage) * ($pokemon->Weakness->value);
                        Pokemon::$hp_pickachu= Pokemon::$hp_pickachu - $newdamage;
                    }
                return $pokemon->name . " took " . $newdamage . " " . $atck->type ." damage!";
                }else{
                    if($pokemon->name == "Magikarp"){
                        Pokemon::$hp_magikarp= Pokemon::$hp_magikarp - $atck->damage;
                    }else{
                        Pokemon::$hp_pickachu= Pokemon::$hp_pickachu - $atck->damage;
                    }
                    return $pokemon->name . " took " . $atck->damage . " " . $atck->type ." damage!";
                }
        }
        public static function printHealth($pokemon){
            if($pokemon->name == "Magikarp"){
                if(Pokemon::$hp_magikarp > 0){
                    return $pokemon->name. " has only " . Pokemon::$hp_magikarp. " hitpoints left!";
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