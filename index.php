<?php
    require "pokemon_builder.php";

    $atck= new Attack("BAZAA", "Lightning", 54, 32, 18);
    $atck2= new Attack("WHAZAA", "Lightning", 57, 21, 39);

    $pickachu= new Pokemon("Pickachu", "Lightning", 80, [$atck , $atck2], "Poison", "Lightning");
    $enemy= new Pokemon("Magikarp", "Water", 150, 2, "Water", "Lightning");


    echo "$pickachu->name vs $enemy->name! <br>";
    echo $pickachu->execute_attack([$atck , $atck2], 1, $enemy);
    


