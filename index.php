<?php
    require "pokemon_builder.php";
    require "Resistance.php";
    require "Weakness.php";
    // Weakness en resistance pickachu en magikarp
    $ristpicka= new Resistance("Lightning", 32);
    $weakpicka= new Weakness("Water", 1.4);

    $ristkarp= new Resistance("Water", 21);
    $weakkarp= new Weakness("Lightning", 1.3);

    // aanvallen pickachu
    $atck1_pichachu= new Attack("Electric Ring", "Lightning", 44, $ristpicka->value, $weakpicka->value);
    $atck2_pichachu= new Attack("Pika Punch", "Lightning", 47, $ristpicka->value, $weakpicka->value);

    //aanvallen magikarp
    $atck1_magikarp= new Attack("Blaze", "Water", 34, $ristkarp->value, $weakkarp->value);
    $atck2_magikarp= new Attack("Splash", "Water", 47, $ristkarp->value, $weakkarp->value);

    $pickachu= new Pokemon("Pickachu", "Lightning", 100, [$atck1_pichachu , $atck2_pichachu], $weakpicka, $ristpicka);
    $magikarp= new Pokemon("Magikarp", "Water", 150, [$atck1_magikarp , $atck2_magikarp], $weakkarp, $ristkarp);

?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="w3-container">
    <div>
        <img class="w3-display-left" src="img/pikachu.jpg" alt="" style="width: 30%;">
    </div>
    <div>
        <img class="w3-diplay-right" src="img/magikarp.png" alt="" style="width: 40%;">
    </div>

    <div class="w3-img-third w3-display-middle">
        <?php
            echo "{$pickachu->getname()} vs {$magikarp->getname()}! <br>";
            while (!(Pokemon::$hp_magikarp <= 0) || !(Pokemon::$hp_pickachu <= 0)) {
                echo $pickachu->execute_attack($pickachu->Attacks, rand(0, (count($pickachu->Attacks) - 1)), $magikarp). "<br>";
                echo $magikarp->printHealth($magikarp). "<br>";
                if($magikarp->printHealth($magikarp) == "Magikarp Has been defeated!!"){
                    die();
                }
                echo $magikarp->execute_attack($magikarp->Attacks, rand(0, (count($pickachu->Attacks) - 1)), $pickachu). "<br>";
                echo $pickachu->printHealth($pickachu). "<br>";
                if($pickachu->printHealth($pickachu) == "Pickachu Has been defeated!!"){
                    die();
                }
            }
            
        ?>
    </div>

</div>

<?php
    // echo "<br>";

    // echo $pickachu->execute_attack($pickachu->Attacks, rand(0, (count($pickachu->Attacks) - 1)), $enemy). "<br>";
    // echo $enemy->printHealth($enemy). "<br>";
    // echo $enemy->execute_attack($enemy->Attacks, rand(0, (count($pickachu->Attacks) - 1)), $pickachu). "<br>";
    // echo $pickachu->printHealth($pickachu). "<br>";
    
    
    


