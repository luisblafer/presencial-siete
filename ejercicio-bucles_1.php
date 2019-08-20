<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio Bucles 1</title>


</head>

<body>
    <h1>Ejercicio Bucles 1</h1>
    <h2>Consigna</h2>
    <p>Mostrar la tabla de multiplicar del 2 utilizando un <b>for</b>.</p>

    <hr>
    <h2>Resultado</h2>
    <ul>
        <?php
            $tablaDeDos = [];
            for ($i=0; $i <= 10 ; $i++) { 
                $tablaDeDos[$i] = 2 * $i;
                echo "<li>2 x " . $i . " = " . $tablaDeDos[$i] . "</li>"; 
            }
        ?>
        a
    </ul>


</body>

</html>