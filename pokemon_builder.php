<?php
    // protected energytype, attacks, resistance, damage
    // hitpoints fixen    : gefixt : 

    // autoload toepassen ervoor zorgen dat de class die in de in de pfp 
    // file zit dezelfde naam heeft als de php file zelf

    // namespaces toepassen
    // abstraction en static

    require "Attack.php";
    class Pokemon {
        protected $name;
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

        public function getname(){
            return $this->name; 
        }
        // public function getEnergyType(){
        //     return $this->EnergyType; 
        // }
        // public function getAttacks(){
        //     return $this->Attacks; 
        // }
        // public function getEnergyType(){
        //     return $this->EnergyType; 
        // }
        // public function getdamage(){
        //     return $this->damage; 
        // }
        // public function getWeakness(){
        //     return $this->Weakness; 
        // }
        // public function getResistance(){
        //     return $this->Resistance; 
        // }

        public function execute_attack($atcks, $attacknumber, $pokemon){
                $atck=  $atcks[$attacknumber];
                if($pokemon->Resistance->name == $atck->type){
                    if($pokemon->name == "Magikarp"){
                        $newdamage= ($atck->damage) - ($pokemon->Resistance->value);
                        $this->hitpoints= $this->hitpoints - $newdamage;
                    }else{
                        $newdamage= ($atck->damage) - ($pokemon->Resistance->value);
                        $this->hitpoints= $this->hitpoints - $newdamage; - $newdamage;
                    }
                    return $pokemon->name . " took " . $newdamage ." ". " " . $atck->type ." damage!";
                }elseif($pokemon->Weakness->name == $atck->type){
                    if($pokemon->name == "Magikarp"){
                        $newdamage= ($atck->damage) * ($pokemon->Weakness->value);
                        $this->hitpoints= $this->hitpoints - $newdamage; - $newdamage;
                    }else{
                        $newdamage= ($atck->damage) * ($pokemon->Weakness->value);
                        $this->hitpoints= $this->hitpoints - $newdamage; - $newdamage;
                    }
                return $pokemon->name . " took " . $newdamage . " " . $atck->type ." damage!";
                }else{
                    if($pokemon->name == "Magikarp"){
                        $this->hitpoints= $this->hitpoints - $newdamage; - $atck->damage;
                    }else{
                        $this->hitpoints= $this->hitpoints - $newdamage; - $atck->damage;
                    }
                    return $pokemon->name . " took " . $atck->damage . " " . $atck->type ." damage!";
                }
        }
        public function printHealth(){
            if($this->name == "Magikarp"){
                if($this->hitpoints > 0){
                    return $this->name. " has only " . $this->hitpoints. " hitpoints left!";
                }elseif($this->hitpoints < 0){
                    return $this->name . " Has been defeated!!"; 
                }else{
                    return "Ewwor";
                }
            }else{
                if($this->hitpoints > 0){
                    return $this->name. " has only " . $this->hitpoints. " hitpoints left!!";
                }elseif($this->hitpoints < 0){
                    return $this->name . " Has been defeated!!";
                }else{
                    return var_dump($this->name);
                }
            }
        }
    }

?>