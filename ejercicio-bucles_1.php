<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio Bucles 1</title>


</head>

<body>
    <h1>Ejercicio Bucles 1</h1>

    <ul>
        <?php
            $tablaDeDos = [];
            for ($i=0; $i <= 10 ; $i++) { 
                $tablaDeDos[$i] = 2 * $i;
                echo "<li>2 x " . $i . " = " . $tablaDeDos[$i] . "</li>"; 
            }
        ?>
    </ul>


</body>

</html>