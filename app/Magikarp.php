<?php
namespace app;
    class Magikarp extends Pokemon{
        public function __contruct($name, $EnergyType, $hitpoints, $Attacks, $Weakness, $Resistance){
            parent::__construct($name, $EnergyType, $hitpoints, $Attacks, $Weakness, $Resistance);
        }
    }