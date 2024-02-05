<?php

// $edad=10;

// if ($edad <5) {
//     echo "El estudiante con ".$edad." años tendrá sus juguetes en la parte inferior de la bodega.";
// } elseif ($edad>=5 && $edad<=7) {
//     echo "El estudiante con ".$edad." años tendrá sus juguetes en la parte media de la bodega.";
// } elseif ($edad>7) {
//     echo "El estudiante con ".$edad." años tendrá sus juguetes en la parte alta de la bodega.";
// } else {
//     echo "No hay registro de edad, tendrá sus juguetes en la bodega de al lado.";
// }

$edades = [3, 5, 7, 1, 2, 8, NULL, 4, 2, 9, 12];

function dondeGuardan($edades) {
  $lugar = "";
  foreach ($edades as $edad) {
    if ($edad === NULL) {
      $mensaje = "Aunque no tengas registro de edad, aún tienes un espacio en la bodega de al lado.";
      echo $mensaje . "\n";
      continue;
    }
    if ($edad < 5) {
      $lugar = "inferior";
    }
    if ($edad >= 5 && $edad <= 7) {
      $lugar = "media";
    }
    if ($edad > 7) {
      $lugar = "alta";
    }
    $mensaje = "El estudiante con $edad años tendrá sus juguetes en la parte $lugar de la bodega.";

    echo $mensaje . "\n";
  }

}

dondeGuardan($edades);

echo "\n";
echo "-----------------------------";
echo "\n";
echo "\n";

// -------------------------------

function medioArbol(int $altura) {
    $arbol = "";
  
    echo "Altura ingresada: $altura\n\n";
  
    for ($i = 0; $i < $altura; $i++) {
      if($i == 0) {
        $arbol .= "*";
      } else {
        $arbol .= "\n";
        $arbol .= str_repeat("*", $i+1);
      }
  
    }
  
    return $arbol;
  } 
  
  echo medioArbol(15);
  
  echo "\n";