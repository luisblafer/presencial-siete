<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio Bucles 3</title>


</head>

<body>
    <h1>Ejercicio Bucles 3</h1>

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