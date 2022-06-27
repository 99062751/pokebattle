<?php
    //namespace zodat ik deze in de index kan gebruiken
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

        //construct zodat ik een nieuwe klas kan maken
        public function __construct($name, $EnergyType, $hitpoints, $Attacks, $Weakness, $Resistance){
            $this->name = $name;
            $this->EnergyType = $EnergyType;
            $this->hitpoints = $hitpoints;
            $this->Attacks = $Attacks;
            $this->damage= $attackdamage;
            $this->Weakness = $Weakness;
            $this->Resistance = $Resistance;
        }
        // alle getters voor de protected properties
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
        // print het health uit van de pokemon
        public function printHealth(){
            if($this->hitpoints > 0){
                return $this->name. " has only " . $this->hitpoints. " hitpoints left!";
            }elseif($this->hitpoints < 0){
                return $this->name . " Has been defeated!!"; 
            }else{
                return "Error";
            }
        }
    }

    class pokemon_attack extends Pokemon{
        protected $atcks; 
        protected $attacknumber; 
        protected $pokemon;

        public function __construct($atcks, $attacknumber, $pokemon){
            $this->atcks = $atcks;
            $this->attacknumber = $attacknumber;
            $this->pokemon = $pokemon;
        }
        // aanval klas aangeroepen door index heeft alle values al erin
        public function execute_attack(){
            $atck=  $this->atcks[$this->attacknumber];
            if($this->pokemon->getResistance()->getname() == $atck->gettype()){
                $newdamage= ($atck->getdamage()) - ($this->pokemon->getResistance()->getvalue());
                $this->pokemon->hitpoints= $this->pokemon->hitpoints - $newdamage;
                return $this->pokemon->name . " took " . $newdamage ." ". " " . $atck->gettype() ." damage!". "<br>";
            }elseif($this->pokemon->getWeakness()->getname() == $atck->gettype()){
                $newdamage= ($atck->getdamage()) * ($this->pokemon->getWeakness()->getvalue());
                $this->pokemon->hitpoints= $this->pokemon->hitpoints - $newdamage; - $newdamage;
            return $this->pokemon->name . " took " . $newdamage . " " . $atck->gettype() ." damage!". "<br>";
            }else{
                $this->pokemon->hitpoints= $this->pokemon->hitpoints - $newdamage; - $atck->getdamage();
                return $this->pokemon->name . " took " . $atck->getdamage() . " " . $atck->gettype() ." damage!". "<br>";
            }
        }
    }
?>