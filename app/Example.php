<?php
namespace app;
    // abstracte klas example gemaakt
    abstract class Example{
        //protected property zodat ik deze in de child kan kan gebruiken
        protected $name;
        public function __construct($name) {
          $this->name = $name;
        }
        //child class voert de functie uit
        abstract public function print(); 
      
    }


    class example2 extends Example{
        // functie print naam die de parent klas meekrijgt
        public function print() {
            return $this->name; 
        }
    }
?>