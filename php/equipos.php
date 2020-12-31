<?php

//Crear array asociativo vacío.
$equipos = [];


// Añadir equipos dinamicamiente.
for ($i=0; $i<=1; ++$i) { 
    $equipos[$i]["nombre"] = "Equipo ". ($i+1);
    $equipos[$i]["numJugadores"] = 10+$i;
    $equipos[$i]["posicionEnLaTabla"] = $i+1;
};

    
// Imprimir los equipos manualmente.


// Primero, se imprime la cabecera de la página html.

echo ('<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Tabla Equipos</title><link rel="stylesheet" href="../css/styles.css" type="text/css"></head>');
echo ('<body>');

// Imprimir equipo 1

echo ('<div class="container-equipos">');
echo ('<div class="equipo">');
echo ('<h1>' . $equipos[0]["nombre"] . '</h1>');
echo ('<p>Nº Jugadores - ' . $equipos[0]["numJugadores"] . '</p>');
echo ('<p>Posici&oacute;n - ' . $equipos[0]["posicionEnLaTabla"] . '</p>');
echo ('</div>');

// Imprimir equipo 2

echo ('<div class="equipo">');
echo ('<h1>' . $equipos[1]["nombre"] . '</h1>');
echo ('<p>Nº Jugadores - ' . $equipos[1]["numJugadores"] . '</p>');
echo ('<p>Posici&oacute;n - ' . $equipos[1]["posicionEnLaTabla"] . '</p>');

// Finalmente, se imprime el resto de cierres de etiquetas html.

echo('</div></div></table></body></html>');
      
?>