<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio Bucles 8</title>


</head>

<body>
    <h1>Ejercicio Bucles 8</h1>
    <h2>Consigna</h2>
    <p>Definir una variable <code>$mascota</code> que sea un array asociativo</p>
    <ol type="a">
        <li>En el índice <b>animal</b> debe decir qué animal es.</li>
        <li>En el índice <b>edad</b> debe decir la edad.</li>
        <li>En el índice <b>altura</b> debe decir la altura.</li>
        <li>En el índice <b>nombre</b> debe decir el nombre</li>
        <li>Recorrer los valores del array con un <b>foreach</b> imprimiendo (como ejemplo):
            <ul>
                <li>animal: perro</li>
                <li>edad: 5</li>
                <li>altura: 0,60</li>
                <li>nombre: Sonic</li>
            </ul>
        </li>
    </ol>

    <hr>
    <h2>Resultados</h2>
    <?php
        $mascota = [
            "animal" => "gato salvaje",
            "edad" => 22,
            "altura" => 1.72,
            "nombre" => "Cosme Fulanito"
        ];
    ?>

    <h3>Elementos del Array (Recorrido completo)</h3>
    <ul>
        <?php
            foreach ($mascota as $index => $valor) {
                echo "<li>" . $index . " : " . $valor ."</li>";
            }
        ?>
    </ul>


</body>

</html>