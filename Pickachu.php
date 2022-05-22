<?php
    require "pokemon_builder.php";
    class Pickachu extends Pokemon{
        public $name;
        public $EnergyType;
        public $hitpoints;
        public $Attacks;
        public $Weakness;
        public $Resistance;
        public $damage;
        public static $hp_enemy;
        public static $hp_pickachu;

        function __contruct($name, $EnergyType, $hitpoints, $Attacks, $Weakness, $Resistance){
            $this->name = $name;
            $this->EnergyType = $EnergyType;
            $this->hitpoints = $hitpoints;
            $this->Attacks = $Attacks;
            $this->damage= $attackdamage;
            $this->Weakness = $Weakness;
            $this->Resistance = $Resistance;
        }
    }