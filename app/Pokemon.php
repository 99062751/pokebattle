<?php
    // protected energytype, attacks, resistance, damage   : gefixt :
    // hitpoints fixen    : gefixt : 

    // autoload toepassen ervoor zorgen dat de class die in de in de pfp : gefixt :
    // file zit dezelfde naam heeft als de php file zelf : gefixt :

    // namespaces toepassen : gefixt :



    // abstract classes 

    // protected static class die bijhoud hoeveel pokemon erzijn met static functie blablabla



    // hitpoints en attacks op protected zetten
    namespace app;
    require_once "./vendor/autoload.php";
    use Attack;


    class Pokemon{
        protected $name;
        protected $EnergyType;
        protected $hitpoints;
        protected $Attacks;
        protected $Weakness;
        protected $Resistance;
        protected $damage;
        
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
        public function getEnergyType(){
            return $this->EnergyType; 
        }
        public function getAttacks(){
            return $this->Attacks; 
        }
        public function getdamage(){
            return $this->damage; 
        }
        public function getWeakness(){
            return $this->Weakness; 
        }
        public function getResistance(){
            return $this->Resistance; 
        }

        public function gethitpoints(){
            return $this->hitpoints; 
        }

        public static function exmaple(){
            return "test static" . "<br>";
        }
        // in een andere klas zetten en die dan aanroepen
        public function execute_attack($atcks, $attacknumber, $pokemon){
                $atck=  $atcks[$attacknumber];
                if($pokemon->getResistance()->name == $atck->type){
                    $newdamage= ($atck->damage) - ($pokemon->getResistance()->value);
                    $this->hitpoints= $this->hitpoints - $newdamage;
                    return $pokemon->name . " took " . $newdamage ." ". " " . $atck->type ." damage!";
                }elseif($pokemon->getWeakness()->name == $atck->type){
                    $newdamage= ($atck->damage) * ($pokemon->getWeakness()->value);
                    $this->hitpoints= $this->hitpoints - $newdamage; - $newdamage;
                return $pokemon->name . " took " . $newdamage . " " . $atck->type ." damage!";
                }else{
                    $this->hitpoints= $this->hitpoints - $newdamage; - $atck->damage;
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