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

        public function sethitpoints($damage){
            $this->hitpoints= $this->hitpoints - $damage;
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
// pokemon verbinden met atcks
    class pokemon_attack{
        protected $atcks; 
        protected $attacknumber; 
        protected $opponent;

        public function __construct($atcks, $attacknumber, $opponent){
            $this->atcks = $atcks;
            $this->attacknumber = $attacknumber;
            $this->opponent = $opponent;
        }
        // aanval klas aangeroepen door index heeft alle values al erin
        public function execute_attack(){
            $atck=  $this->atcks[$this->attacknumber];
            if($this->opponent->getResistance()->getname() == $atck->gettype()){
                $newdamage= ($atck->getdamage()) - ($this->opponent->getResistance()->getvalue());
                $this->opponent->sethitpoints($newdamage);
                return $this->opponent->getname() . " took " . $newdamage ." ". " " . $atck->gettype() ." damage!". "<br>";
            }elseif($this->opponent->getWeakness()->getname() == $atck->gettype()){
                $newdamage= ($atck->getdamage()) * ($this->opponent->getWeakness()->getvalue());
               $this->opponent->sethitpoints($newdamage);
            return $this->opponent->getname() . " took " . $newdamage . " " . $atck->gettype() ." damage!". "<br>";
            }else{
                $damage= $atck->getdamage();
                $this->opponent->sethitpoints($damage);
                return $this->opponent->getname() . " took " . $atck->getdamage() . " " . $atck->gettype() ." damage!". "<br>";
            }
            
        }
    }
?>