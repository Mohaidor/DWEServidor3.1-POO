<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>ud03ejer01</h1>
    <?php

    //Para poder usar Contacto.php
    require_once('Contacto.php');
    //Creación de un contacto
    $contacto1 = new Contacto("001", "Juan", 698574235);
    //Imprimir el contacto1 con el método mágico __toString() que se llama solo
    echo 'Contacto1:';
    echo "<br><p><b>$contacto1</b></p>";
    //Ahora voy a modificar el nombre de $contacto1 mediante setter
    $contacto1->setNombre("Pepe");
    echo 'Modificando el nombre del contacto a Pepe...';
    //Muestra del nombre modificado del contacto 1
    echo "<p><b>$contacto1</b></p>";
    //Muestra el nombre contacto después de modificar
    echo "<p>Nombre despues de modificar: " . $contacto1->getNombre() . "</p>";
    ?>
</body>

</html>