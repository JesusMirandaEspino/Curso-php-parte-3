<?php

$cadena1 = 'Esta es una cadena de texto';
$cadena2 = '';
$cadena3 = 'es';

for( $i=0;$i < strlen( $cadena1 ); $i++  ){
    $cadena2 = $cadena1[$i] . $cadena2;

}


echo '<p>' . $cadena1 . '</p>' ;
echo '<p>' . $cadena2 . '</p>';

$r = strstr( $cadena1, $cadena3 );
$p = strpos($cadena1, $cadena3 );

if( $r ){
    echo '<p>Valor encontrado</p>';
}else{
    echo '<p>Valor no encontrado</p>';
}


echo '<p>' . $p . '</p>';


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