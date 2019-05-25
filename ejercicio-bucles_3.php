<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio Bucles 3</title>


</head>

<body>
    <h1>Ejercicio Bucles 3</h1>
    <h2>Consigna</h2>
    <p>Un bucle <b>while</b> que a partir de una variable <code>$contador</code> que toma valores de 1 a 5, muestre
        por pantalla el doble del valor de <code>$contador</code>, es decir, que muestre 2, 4, 6, 8, 10.</p>

    <hr>
    <h2>Resultado</h2>
    <ul>
        <?php
            $contador = rand(-1,10);
            
            echo "<li>Número Original: " . $contador . "</li>";

            while (1 <= $contador && $contador <= 5) {
                echo "<li>Doble del Número Original: " . $contador*2 . "</li>";
                break;
            }
        ?>
    </ul>
</body>

</html>