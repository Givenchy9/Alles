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
<!-- <script>
    let merk = "mercedes"; 
    let type = "amg";
    let kleur = "zwart";
    let prijs = 10.000;

    document.getElementById("demo").innerHTML = merk + " " + type + " " + kleur + " " + prijs;
</script> -->
</html> 