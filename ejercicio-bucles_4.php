<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio Bucles 4</title>


</head>

<body>
    <h1>Ejercicio Bucles 4</h1>
    <h2>Consigna</h2>
    <p>Utilizando un <b>while</b> haremos un programa que tire una moneda (seleccionará un número
        al azar que puede ser 0 o 1) hasta que saque 5 veces cara (el número 1). Al terminar,
        debe imprimir cuántos tiros de monedas llevó obtener 5 veces cara.</p>

    <hr>
    <h2>Resultado</h2>
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