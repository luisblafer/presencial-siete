<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio Bucles 6</title>


</head>

<body>
    <h1>Ejercicio Bucles 6</h1>
    <?php
        $numeros = [];
        for ($i=0; $i <10 ; $i++) { 
            $numeros[] = rand(0,10);
        }
    echo $i;
    var_dump($numeros);
    ?>


<ul>
    <?php
        $tiros = 0;
        while ($acumulado < 5) {
            $moneda = rand(0,1);
            $tiros++;
            $acumulado = $acumulado + $moneda;
        }
        echo "<li>Cantidad de Tiros: " . $tiros . "</li>";
    ?>
</ul>
</body>

</html>