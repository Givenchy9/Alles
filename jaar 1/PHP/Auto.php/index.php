<?php

include ("auto.php");
include ("autoOverzicht.php");

$ao = new autoOverzicht();
$ao -> add(new Auto(merk: "BMW", type:"X6", prijs:"30000", kleur:"wit"));
$ao -> add(new Auto(merk: "Audi", type:"RS7", prijs:"60000", kleur:"zwart"));
$ao -> add(new Auto(merk: "Mercedes", type:"amg", prijs:"90000", kleur:"grijs"));
$ao -> add(new Auto(merk: "Bugatti", type:"Ciron", prijs:"30000", kleur:"wit"));
$ao -> add(new Auto(merk: "Lamborgini", type:"Aventador", prijs:"60000", kleur:"zwart"));
$ao -> add(new Auto(merk: "Ford", type:"Mustang", prijs:"90000", kleur:"grijs"));
$ao -> add(new Auto(merk: "Nissan", type:"Skyline", prijs:"30000", kleur:"wit"));
$ao -> add(new Auto(merk: "Porsche", type:"911", prijs:"60000", kleur:"zwart"));
$ao -> add(new Auto(merk: "Ferrari", type:"LaFarrari", prijs:"90000", kleur:"grijs"));

print_r($ao -> autos);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php
        class Auto {
            public string $merk;
            public string $type;
            public int $prijs;
            public string $kleur;

            public function __construct($merk, $type, $prijs, $kleur) {
                $this -> merk = $merk;
                $this -> type = $type;
                $this -> prijs = $prijs;
                $this -> kleur = $kleur;
            }
        }

        $mybmw = new Auto(merk: "BMW", type:"X6", prijs:"30000", kleur:"wit");
        $myaudi = new Auto(merk: "Audi", type:"RS7", prijs:"60000", kleur:"zwart");
        $mymercedes = new Auto(merk: "Mercedes", type:"amg", prijs:"90000", kleur:"grijs");
    ?>
</head> 
<body>
    <div class="Auto"></div>
    <p id="demo"></p>
</body>
</html> 