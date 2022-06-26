<?php
namespace app;
    class Pickachu extends Pokemon{
        // parent construct zodat er een nieuwe pokemon word aangemaakt
        public function __contruct($name, $EnergyType, $hitpoints, $Attacks, $Weakness, $Resistance){
            parent::__construct($name, $EnergyType, $hitpoints, $Attacks, $Weakness, $Resistance);
        }
    }

    