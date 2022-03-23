<?php
    require "pokemon_builder.php";
    $pickachu= new Pokemon("Pick a CHU", "Water", 80, 5, "Poison", "Water");
    $enemy= new Pokemon("Magikarp", "Water", 150, 2, "Fire", "Water");

    echo "$pickachu->name vs $enemy->name <br>";
    echo $pickachu->attack($pickachu->name, 'lightning');
    echo $pickachu->attack($enemy->name, 'water');
    echo $enemy->damageCount($pickachu->egtp, $enemy->weak, $enemy->rist);


