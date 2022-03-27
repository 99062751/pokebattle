<?php
    require "pokemon_builder.php";
    // aanvallen pickachu
    $atck1_pichachu= new Attack("BAZAA", "Lightning", 54, 32, 18);
    $atck2_pichachu= new Attack("WHAZAA", "Lightning", 57, 21, 39);

    //aanvallen magikarp
    $atck1_magikarp= new Attack("SWOOSHH", "Water", 40, 32, 18);
    $atck2_magikarp= new Attack("REEE", "Water", 32, 21, 39);

    $pickachu= new Pokemon("Pickachu", "Lightning", 100, [$atck1_pichachu , $atck2_pichachu], "Lightning", "Poison");
    $enemy= new Pokemon("Magikarp", "Water", 150, [$atck1_magikarp , $atck2_magikarp], "Water", "Ok");


    echo "$pickachu->name vs $enemy->name! <br>";
    echo $pickachu->execute_attack($pickachu->Attacks, 1, $enemy). "<br>";
    echo $enemy->printHealth($enemy). "<br>";
    echo $enemy->execute_attack($enemy->Attacks, 1, $pickachu). "<br>";
    echo $pickachu->printHealth($pickachu). "<br>";

    echo "<br>";

    echo $pickachu->execute_attack($pickachu->Attacks, 0, $enemy). "<br>";
    echo $enemy->printHealth($enemy). "<br>";
    echo $enemy->execute_attack($enemy->Attacks, 0, $pickachu). "<br>";
    echo $pickachu->printHealth($pickachu). "<br>";
    

    // echo $pickachu->execute_attack([$atck1_pichachu , $atck2_pichachu], 0, $enemy). "<br>";
    // echo $enemy->printHealth($enemy). "<br>";
    // echo $enemy->execute_attack([$atck1_magikarp , $atck2_magikarp], 0, $pickachu). "<br>";
    // echo $enemy->printHealth($pickachu). "<br>";
    
    


