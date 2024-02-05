<?php

// $nombre = "Arturo";
// $apellido = "Rojas";

// echo $nombre.' '.$apellido;

function concatenar($nombre,$apellido) {
    echo $nombre.' '.$apellido;
}

concatenar("Arturo","Rojas");

echo "\n";

function sumarNumeros($numeros){
    $suma = 0;
    for ($i=0; $i < 4; $i++) { 
        $suma = $suma + $numeros[$i];
    }

    echo "La suma de los valores del array es: ".$suma;

}
$numeros = array(1,2,3,4);
sumarNumeros($numeros);