<?php

    require_once "./vendor/autoload.php";
    require_once "./app/Example.php";
    use app\Pokemon;
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
    $atck1_pichachu= new Attack("Electric Ring", "Lightning", 56, $ristpicka->value, $weakpicka->value);
    $atck2_pichachu= new Attack("Pika Punch", "Lightning", 50, $ristpicka->value, $weakpicka->value);

    //aanvallen magikarp
    $atck1_magikarp= new Attack("Blaze", "Water", 34, $ristkarp->value, $weakkarp->value);
    $atck2_magikarp= new Attack("Splash", "Water", 47, $ristkarp->value, $weakkarp->value);

    $pickachu= new Pokemon("Pickachu", "Lightning", 140, [$atck1_pichachu , $atck2_pichachu], $weakpicka, $ristpicka);
    $magikarp= new Pokemon("Magikarp", "Water", 150, [$atck1_magikarp , $atck2_magikarp], $weakkarp, $ristkarp);

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
        echo $pickachu::exmaple();
        echo $example->print(). "<br>";
            echo "{$pickachu->getname()} vs {$magikarp->getname()}! <br>";
                while (!($magikarp->hitpoints <= 0) || !($pickachu->hitpoints <= 0)) {
                    echo $magikarp->execute_attack($magikarp->Attacks, rand(0, (count($magikarp->Attacks) - 1)), $pickachu). "<br>";
                    echo $pickachu->printHealth(). "<br>";
                    if($pickachu->printHealth() == "Pickachu Has been defeated!!"){
                        die();
                    }

                    echo $pickachu->execute_attack($pickachu->Attacks, rand(0, (count($pickachu->Attacks) - 1)), $magikarp). "<br>";
                    echo $magikarp->printHealth(). "<br>";
                    if($magikarp->printHealth() == "Magikarp Has been defeated!!"){
                        die();
                    }
                }
            
        ?>
    </div>

</div>

<?php
