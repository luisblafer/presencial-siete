<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio Bucles 5</title>


</head>

<body>
    <h1>Ejercicio Bucles 5</h1>
    <h2>Consigna</h2>
    <p>
        Definir un array con 5 strings que sean nombres. Recorrer este array para imprimir cada
        uno de los nombres en pantalla.</p>
    <ol type="a">
        <li>Resolver este problema con un <b>for</b>.</li>
        <li>Resolver este problema con <b>while</b>.</li>
        <li>Resolver este problema con un <b>do/while</b>.</li>
        <li>Resolver este problema con un <b>foreach</b>.</li>
    </ol>

    <?php
        $nombres = [
            0 => "Nicolás",
            1 => "Dario",
            2 => "Franco",
            3 => "Sebastián",
            4 => "Luis",
        //    5 => "<b>Diputado</b> Paulo Londra"
        ];
        echo "<p>Cantidad de Nombres: <b>" . count($nombres) . "</b></p>";
    ?>
    
    <hr>
    <h2>Resolución con bucle For</h2>
    <p>Nombres:</p>
    <ul>
        <?php
            for ($i=0; $i < count($nombres) ; $i++) { 
                echo "<li>" . $nombres[$i] . "</li>";
            }
        ?>
    </ul>

    <hr>
    <h2>Resolución con bucle While</h2>
    <p>Nombres:</p>
    <ul>
        <?php
            $a = 0;
            while ($a < count($nombres)) {
                echo "<li>" . $nombres[$a] . "</li>";
                $a++;
            }
        ?>
    </ul>

    <hr>
    <h2>Resolución con bucle Do-While</h2>
    <p>Nombres:</p>
    <ul>
        <?php
            $a = 0;
            do {
                echo "<li>" . $nombres[$a] . "</li>";
                $a++;
            } while ($a < count($nombres));
        ?>
    </ul>

    <hr>
    <h2>Resolución con bucle Foreach</h2>
    <p>Nombres:</p>
    <ul>
        <?php
            foreach ($nombres as $nombre) {
                echo "<li>" . $nombre . "</li>";
            }
        ?>
    </ul>
</body>

</html>