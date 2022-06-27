<?php

    require_once "./vendor/autoload.php";
    require_once "./app/Example.php";
    // welke klassen de index allemaal moet gebruiken
    use app\Pokemon;
    use app\pokemon_attack;
    use app\Resistance;
    use app\Weakness;
    use app\Attack;
    use app\example2;
    

    // Weakness en resistance pickachu en magikarp
    $ristpicka= new Resistance("Lightning", 32);
    $weakpicka= new Weakness("Water", 1.2);

    $ristkarp= new Resistance("Water", 21);
    $weakkarp= new Weakness("Lightning", 1.3);

    

    // // aanvallen pickachu
    $atck1_pichachu= new Attack("Electric Ring", "Lightning", 56, $ristpicka->getvalue(), $weakpicka->getvalue());
    $atck2_pichachu= new Attack("Pika Punch", "Lightning", 50, $ristpicka->getvalue(), $weakpicka->getvalue());

    //aanvallen magikarp
    $atck1_magikarp= new Attack("Blaze", "Water", 34, $ristkarp->getvalue(), $weakkarp->getvalue());
    $atck2_magikarp= new Attack("Splash", "Water", 47, $ristkarp->getvalue(), $weakkarp->getvalue());

    $pickachu= new Pokemon("Pickachu", "Lightning", 140, [$atck1_pichachu , $atck2_pichachu], $weakpicka, $ristpicka);
    $magikarp= new Pokemon("Magikarp", "Water", 150, [$atck1_magikarp , $atck2_magikarp], $weakkarp, $ristkarp);

    //aanval klas pokemon
    $magi_attack= new pokemon_attack($magikarp->getAttacks(), rand(0, (count($magikarp->getAttacks()) - 1)), $pickachu);
    $pika_attack= new pokemon_attack($pickachu->getAttacks(), rand(0, (count($pickachu->getAttacks()) - 1)), $magikarp);

    $example= new example2("test abstract");
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
        // laat de static en abstracte klas methodes zien
        echo $pickachu::exmaple();
        echo $example->print(). "<br>";
            echo "{$pickachu->getname()} vs {$magikarp->getname()}! <br>";
            // loop door aanvallen totdat een pokemons hp lager is dan 0
                while (!($magikarp->gethitpoints() <= 0) || !($pickachu->gethitpoints() <= 0)) {
                    // voert een aanval uit en print daarna health van de tegenstander
                    echo $magi_attack->execute_attack();
                    echo $pickachu->printHealth(). "<br>";
                    // als hij een doodbericht van de pokemon klas krijgt stopt hij met aanvallen
                    if($pickachu->printHealth() == "Pickachu Has been defeated!!"){
                        die();
                    }
                    
                    // voert een aanval uit en print daarna health van de tegenstander
                    echo $pika_attack->execute_attack();
                    echo $magikarp->printHealth(). "<br>";
                    // als hij een doodbericht van de pokemon klas krijgt stopt hij met aanvallen
                    if($magikarp->printHealth() == "Magikarp Has been defeated!!"){
                        die();
                    }
                }
            
        ?>
    </div>

</div>

<?php
