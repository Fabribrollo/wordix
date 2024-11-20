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

/** 1)
 * Obtiene una colección de palabras
 * @return array
 */
function cargarColeccionPalabras()
{
    $coleccionPalabras = [
        "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
        "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
        "VERDE", "MELON", "YUYOS", "PIANO", "PISOS",
        "CIELO", "AMIGO", "BARCO", "MENTE", "ARENA"
    ];

    return ($coleccionPalabras);
}

/** 2)
 * Funcion que carga una coleccion de partidas en un arreglo
 * @return array
 */

function cargarPartidas(){
    $coleccionPartidas[0] = ["palabraWordix"=> "FUEGO","jugador" =>"juan", "intentos" => 0 , "puntaje" => 0];
    $coleccionPartidas[1] = ["palabraWordix"=> "YUYOS","jugador" =>"ariel", "intentos" => 1 , "puntaje" => 6];
    $coleccionPartidas[2] = ["palabraWordix"=> "QUESO","jugador" =>"miguel", "intentos" => 4 , "puntaje" => 3];
    $coleccionPartidas[3] = ["palabraWordix"=> "HUEVO","jugador" =>"oscar", "intentos" => 2 , "puntaje" => 5];
    $coleccionPartidas[4] = ["palabraWordix"=> "GOTAS","jugador" =>"ariel", "intentos" => 3 , "puntaje" => 4];
    $coleccionPartidas[5] = ["palabraWordix"=> "MELON","jugador" =>"juan", "intentos" => 2 , "puntaje" => 5];
    $coleccionPartidas[6] = ["palabraWordix"=> "FUEGO","jugador" =>"ariel", "intentos" => 6 , "puntaje" => 0];
    $coleccionPartidas[7] = ["palabraWordix"=> "FUEGO","jugador" =>"juli", "intentos" => 6 , "puntaje" => 0];
    $coleccionPartidas[8] = ["palabraWordix"=> "FUEGO","jugador" =>"juan", "intentos" => 0 , "puntaje" => 0];
    $coleccionPartidas[9] = ["palabraWordix"=> "MUJER","jugador" =>"miguel", "intentos" => 5 , "puntaje" => 11];
    $coleccionPartidas[10] = ["palabraWordix"=> "BARCO","jugador" =>"rodri", "intentos" => 5, "puntaje" => 11];

    return $coleccionPartidas;
}
/**
 * 4)
 * leerPalabra5Letras() en wordix.php
 */


/** 5)
 * solicitarNumeroEntre() en wordix.php
 */

/** 7)
 * Funcion que tiene como parametro un array de palabras y una palabra para agregar, retorna el array con la palabra añadida.
 * @param float[] $coleccionPalabras
 * @param $palabra
 * @return array
 */
function agregarPalabra($coleccionPalabras, $palabra){
    $coleccionPalabras[count($coleccionPalabras) + 1] = $palabra;
    return $coleccionPalabras;
}

function mostrarPartida(){
    $numeroDePartidas = count(cargarPartidas());
    echo "Ingrese el numero de partida para mostrar (1-" . $numeroDePartidas . ")";
    $partidaElegida = trim(fgets(STDIN)) - 1;
    echo "\n*******************************\n";
    echo "Partida WORDIX " . $partidaElegida + 1 . " palabra " . cargarPartidas()[$partidaElegida]["palabraWordix"]. ". \n";
    echo "Jugador: " . cargarPartidas()[$partidaElegida]["jugador"]. ". \n";
    echo "Puntaje: " . cargarPartidas()[$partidaElegida]["puntaje"] . ". \n";
    if(cargarPartidas()[$partidaElegida]["puntaje"] == 0){
        echo "Intento: No adivinó la palabra. \n";
    }else{
        echo "Intento: Adivinó la palabra en " . cargarPartidas()[$partidaElegida]["intentos"] . " intentos.". " \n";
    }
    echo "\n*******************************\n";
}


function primerPartidaGanada()  {

    echo "Ingrese el nombre de un jugador: ";
    $nombreJugador = trim(fgets(STDIN));

    //cargarPartidas()[coleccionPartidas]["nombre"] == $nombreJugador = false;
    if (cargarPartidas()[$coleccionPartidas]["intentos"] > 0 && cargarPartidas()[$coleccionPartidas]["puntaje"] > 0){

        while( $i < count(cargarPartidas())){
            if (cargarPartidas()[$coleccionPartidas]["nombre"] == $nombreJugador){
                echo "************************ \n";
                echo "partida WORDIX " . "palabra " . cargarPartidas()[$coleccionPartidas["palabraWordix"]];
                echo "puntaje: " . cargarPartidas()[$coleccionPartidas]["puntaje"];
                echo "intento: " . cargarPartidas()[$coleccionPartidas]["intentos"];
                echo "************************ \n";
            }

        }
        
    }
}



/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:
$partidas = cargarPartidas();
$palabras = cargarColeccionPalabras();

//Proceso:

//$partida = jugarWordix("MELON", strtolower("MaJo"));
//print_r($partida);
//imprimirResultado($partida);


/** 3)
 * Menu de opciones
 */
function seleccionarOpcion(){
    echo "ingrese una opcion\n
    1) Jugar al wordix con una palabra elegida\n
    2) Jugar al wordix con una palabra aleatoria\n
    3) Mostrar una partida\n
    4) Mostrar la primer partida ganadora\n
    5) Mostrar resumen de Jugador\n
    6) Mostrar listado de partidas ordenadas por jugador y por palabra\n
    7) Agregar una palabra de 5 letras a Wordix\n
    8) salir";
$opcion = solicitarNumeroEntre(1, 8);
    return $opcion;
}

do {
    $opcion=seleccionarOpcion();
    
    switch ($opcion) {
        case 1: 
            
            break;
        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2

            break;
        case 3: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
        case 4: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
        case 5: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
        case 6: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
        case 7: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
            //...
    }
} while ($opcion != 8);
