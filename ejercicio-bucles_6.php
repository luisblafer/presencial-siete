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
    <h2>Consigna</h2>
    <p>Definir un <b>array</b> con 10 números aleatorios entre 0 y 10. Recorrer este array para imprimir
        todos los números. La ejecución debe terminarse si alguno de los números encontrados es
        un 5 (Se debe imprimir “Se encontró un 5!”)</p>

    <hr>
    <h2>Resultado</h2>
    <?php
        $numeros = [];
        for ($i=0; $i <10 ; $i++) { 
            $numeros[] = rand(0,10);
        }
    ?>

    <h3>Números en Array (Recorrido completo)</h3>
    <ul>
        <?php
            foreach ($numeros as $index => $numero) {
                echo "<li>" . $index . " &rArr; " . $numero ."</li>";
            }
        ?>
    </ul>
    <?php
        echo "<p>Cantidad de elementos en el Array: <b>" . count($numeros) . "</b></p>";
    ?>

    <h3>Números en Array (Recorrido con corte)</h3>
    <ul>
        <?php
            foreach ($numeros as $index => $numero) {
                echo "<li>" . $index . " &rArr; " . $numero . "</li>";

                /* Posiciono el condicional IF luego del echo de elementos
                para que se vea claro que el elemento del array contiene un 5.
                 */
                if ($numero == 5) {
                    echo "</ul><p>¡Se encontró un <b>5</b>!</p>";
                    break;
                }
            }
        ?>
    </ul>
    <?php
        echo "<p>Cantidad de elementos en el Array: <b>" . count($numeros) . "</b></p>";
    ?>

</body>

</html>