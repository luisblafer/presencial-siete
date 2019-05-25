<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio Bucles 2</title>


</head>

<body>
    <h1>Ejercicio Bucles 2</h1>
    <h2>Consigna</h2>
    <p>Un bucle <b>while</b> que cuente desde 100 hasta 85 (fíjate que en este caso es decreciente).</p>

    <hr>
    <h2>Resultado</h2>
    <ul>
        <?php
            $a = 100;
            while ($a >= 85) {
                echo "<li>" . $a . "</li>";
                $a--;
            }
        ?>
    </ul>


</body>

</html>