<?php
include_once("wordix.php");


/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* ****COMPLETAR***** */


/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

/**
 * Obtiene una colección de palabras
 * @return array
 */
function cargarColeccionPalabras()
{
    $coleccionPalabras = [
        "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
        "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
        "VERDE", "MELON", "YUYOS", "PIANO", "PISOS",
        "CIELO", "AMIGO","BARCO","MENTE","ARENA"
    ];

    return ($coleccionPalabras);
}

/* ****COMPLETAR***** */

function cargarPartidas(){
    $coleccionPartidas[0] = ["palabraWordix"=> "FUEGO","jugador" =>"juan", "intentos" => 0 , "puntaje" => 0];
    $coleccionPartidas[1] = ["palabraWordix"=> "FUEGO","jugador" =>"juan", "intentos" => 0 , "puntaje" => 0];
    $coleccionPartidas[2] = ["palabraWordix"=> "FUEGO","jugador" =>"juan", "intentos" => 0 , "puntaje" => 0];
    $coleccionPartidas[3] = ["palabraWordix"=> "FUEGO","jugador" =>"juan", "intentos" => 0 , "puntaje" => 0];
    $coleccionPartidas[4] = ["palabraWordix"=> "FUEGO","jugador" =>"juan", "intentos" => 0 , "puntaje" => 0];
    $coleccionPartidas[5] = ["palabraWordix"=> "FUEGO","jugador" =>"juan", "intentos" => 0 , "puntaje" => 0];
    $coleccionPartidas[6] = ["palabraWordix"=> "FUEGO","jugador" =>"juan", "intentos" => 0 , "puntaje" => 0];
    $coleccionPartidas[7] = ["palabraWordix"=> "FUEGO","jugador" =>"juan", "intentos" => 0 , "puntaje" => 0];
    $coleccionPartidas[8] = ["palabraWordix"=> "FUEGO","jugador" =>"juan", "intentos" => 0 , "puntaje" => 0];
    $coleccionPartidas[9] = ["palabraWordix"=> "MUJER","jugador" =>"juan", "intentos" => 5 , "puntaje" => 11];
    $coleccionPartidas[10] = ["palabraWordix"=> "BARCO","jugador" =>"rodri", "intentos" => 5, "puntaje" => 11];


}

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:


//Proceso:

$partida = jugarWordix("MELON", strtolower("MaJo"));
//print_r($partida);
//imprimirResultado($partida);



/*
do {
    $opcion = ...;

    
    switch ($opcion) {
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1

            break;
        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2

            break;
        case 3: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
            //...
    }
} while ($opcion != X);
*/
