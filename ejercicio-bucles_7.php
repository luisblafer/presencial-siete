<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio Bucles 7</title>


</head>

<body>
    <h1>Ejercicio Bucles 7</h1>
    <h2>Consigna</h2>
    <p>Definir un <b>array</b> con 10 números aleatorios entre 0 y 100. Recorrer este array contando
cuantos números son pares.</p>

    <hr>
    <h2>Resultados</h2>
    <?php
        $numeros = [];
        for ($i=0; $i <10 ; $i++) { 
            $numeros[] = rand(0,100);
        }
    ?>

    <h3>Números en Array (Recorrido completo)</h3>
    <ul>
        <?php
            $cantidadNumerosPares = 0;
            foreach ($numeros as $index => $numero) {
                echo "<li>" . $index . " &rArr; " . $numero ."</li>";
                if (($numero % 2) == 0) {
                    $cantidadNumerosPares++;
                }
            }
        ?>
    </ul>

    <h3>Análisis del Array</h3>
    <ul>
        <?php
            echo "<li>Cantidad de elementos en el Array: <b>" . count($numeros) . "</b></li>";
            echo "<li>Cantidad de Números Pares: <b>" . $cantidadNumerosPares . "</b></li>";
            echo "<li>Cantidad de Números Impares: <b>" . (count($numeros) - $cantidadNumerosPares) . "</b></li>";
        ?>
    </ul>
    

</body>

</html>