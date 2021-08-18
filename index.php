<?php

$texto = '$560,000';
$re = str_replace( '$', '', $texto );
$ca = str_replace( ',', '', $re );
echo $ca;

echo '<br/>';


$nuevaCadena = 'esta es una cadena de texto';

echo str_shuffle( $nuevaCadena );

$tabla = get_html_translation_table( HTML_ENTITIES );
$otraCadena = 'esta es otra cadena de texto con salto de linea para una brueba con una funcion en php';
$salida = wordwrap( $otraCadena, 20, '<br/>', true );


$frutas = 'manzana melon platano sandia';
$frutas_array = explode( ' ', $frutas );

$nombre = 'Jose de Jesus Miranda Espino';

echo cos( 2.11122 ) .  '<br/>';
echo atan(1.22) .  '<br/>';
echo atanh(1.22) .  '<br/>';
echo 1/sin(0.701) .  '<br/>';
echo 1/cos(0.701) .  '<br/>';
echo 1/tan(0.701) .  '<br/>';

echo ucwords( $nombre ) . '<br/>';
echo ucfirst($nombre) . '<br/>';

foreach(  $frutas_array as $fruta ){
    echo '<p> ' .  $fruta . '</p>';
}


list( $manzana, $melon, $platano, $sandia ) = explode(' ', $frutas);

echo $manzana . '   ' . $melon .  '   ' .  $platano . '   ' . $sandia;

// error al imprimir str echo strstr( $otraCadena, $tabla );

echo $salida;






?>



<!DOCTYPE html>
<html lang="es">

<head>

    <!-- **************************  -->
    <!-- **************************  -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Jesus Miranda">
    <!-- **************************  -->
    <!-- **************************  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="INDEX,FOLLOW">
    <!-- **************************  -->
    <!-- **************************  -->
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/responsivo.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <!-- **************************  -->
    <!-- **************************  -->
    <link rel="icon" type="image/png" href="">
    <!-- **************************  -->
    <!-- **************************  -->
    <title></title>


</head>

<body>


    <!-- **************************  -->
    <!-- **************************  -->
    <header>





    </header>


    <!-- **************************  -->
    <!-- **************************  -->
    <main>

    </main>


    <!-- **************************  -->
    <!-- **************************  -->
    <footer>


    </footer>


    <script src="assets/js/app.js"></script>

</body>

</html>