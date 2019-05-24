<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio Bucles 4</title>


</head>

<body>
    <h1>Ejercicio Bucles 4</h1>

<ul>
    <?php
        $tiros = 0;
        $acumulado = 0;
        while ($acumulado < 5) {
            $moneda = rand(0,1);
            $tiros++;
            $acumulado += $moneda;
        }
        echo $acumulado;
        echo "<li>Cantidad de Tiros: " . $tiros . "</li>";
    ?>
</ul>
</body>

</html>