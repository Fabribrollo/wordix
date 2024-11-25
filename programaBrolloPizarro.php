<?php
include_once("wordix.php");


/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

//Brollo Fabrizio FAI-5532 carrera TUDW fabrizio.brollo@est.fi.uncoma.edu.ar   user github: fabribrollo
//Pizarro Fidel FAI-5554 carrera TUDW  fidelpizarro11@gmail.com   user github: fidelpizarro3

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
/**COMPLETAR
 * 4)
 * leerPalabra5Letras() en wordix.php
 */


/** 5)COMPLETAR
 * solicitarNumeroEntre() en wordix.php
 */

/** 6)
 * COMPLETAR
 */
function mostrarPartida(){
    $numeroDePartidas = count(cargarPartidas());
    echo "Ingrese el numero de partida para mostrar (1-" . $numeroDePartidas . ")";
    $numeroPartida = solicitarNumeroEntre(1,$numeroDePartidas);
    $partidaElegida = $numeroPartida -1;
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

/**8)
 * COMPLETAR
 */
function primerPartidaGanadaIndice()  {
    echo "Ingrese el nombre de un jugador: ";
    $nombreJugador = trim(fgets(STDIN));
    $i = 0;
    $primeraGanada = true;
    $primeraGanadaIndice = -1;
    while( $i < count(cargarPartidas()) && $primeraGanada ){
        if (cargarPartidas()[$i]["jugador"] == $nombreJugador && cargarPartidas()[$i]["intentos"] > 0 && cargarPartidas()[$i]["puntaje"] > 0){
            $primeraGanada = false;
            $primeraGanadaIndice = $i;
        }
        $i++;
    }
    return $primeraGanadaIndice;
}

/**
 * COMPLETAR
 */
function primerPartidaGanada($indice){
    if($indice >= 0){
    echo "\n*******************************\n";
    echo "Partida WORDIX " . $indice + 1 . " palabra " . cargarPartidas()[$indice]["palabraWordix"]. ". \n";
    echo "Jugador: " . cargarPartidas()[$indice]["jugador"]. ". \n";
    echo "Puntaje: " . cargarPartidas()[$indice]["puntaje"] . ". \n";
        if(cargarPartidas()[$indice]["puntaje"] == 0){
        echo "Intento: No adivinó la palabra. \n";
        }  
        else{
        echo "Intento: Adivinó la palabra en " . cargarPartidas()[$indice]["intentos"] . " intentos.". " \n";
        }
    echo "\n*******************************\n";
}else{
    echo "El jugador no gano una partida\n";
}
}



/**9)
 * 
 */
function resumenJugador(){
    echo "Ingrese el nombre de un jugador: ";
    $jugador = trim(fgets(STDIN));
    $partidas = cargarPartidas();
    $partidasJugador = 0;
    $acumPuntaje = 0;
    $acumVictorias = 0;
    $unIntento = 0;
    $dosIntentos = 0;
    $tresIntentos = 0;
    $cuatroIntentos = 0;
    $cincoIntentos = 0;
    $seisIntentos = 0;
    $i = 0;

    
    for ($i=0; $i < count($partidas); $i++) { 
        if($partidas[$i]["jugador"] == $jugador){
            $partidasJugador++;
            $acumPuntaje = $acumPuntaje + $partidas[$i]["puntaje"] ;
            if ($partidas[$i]["puntaje"] > 0 ){
                $acumVictorias++;
            }
            if($partidas[$i]["puntaje"] > 0 && $partidas[$i]["intentos"] == 1){
                $unIntento++;
            }
            if($partidas[$i]["puntaje"] > 0 && $partidas[$i]["intentos"] == 2){
                $dosIntentos++;
            }
            if($partidas[$i]["puntaje"] > 0 && $partidas[$i]["intentos"] == 3){
                $tresIntentos++;
            }
            if($partidas[$i]["puntaje"] > 0 && $partidas[$i]["intentos"] == 4){
                $cuatroIntentos++;
            }
            if($partidas[$i]["puntaje"] > 0 && $partidas[$i]["intentos"] == 5){
                $cincoIntentos;
            }
            if($partidas[$i]["puntaje"] > 0 && $partidas[$i]["intentos"] == 6){
                $seisIntentos;
            }
            
        }
    }
    return ["jugador" => $jugador, 
    "partidas" => $partidasJugador, 
    "puntaje" => $acumPuntaje, 
    "victorias" => $acumVictorias, 
    "intento1" => $unIntento,
    "intento2" => $dosIntentos,
    "intento3" => $tresIntentos,
    "intento4" => $cuatroIntentos,
    "intento5" => $cincoIntentos,
    "intento6" => $seisIntentos
];

}

/**10)
  * 
  */
function solicitarJugador(){
    echo "Ingrese el nombre de un jugador: ";
    $jugador = trim(fgets(STDIN));
    if(ctype_alpha($jugador[0])){
        $jugadorMinusculas = strtolower($jugador);
    }else{
        while(!ctype_alpha($jugador[0])){
            echo "Ingrese un nombre valido: ";
            $jugador = trim(fgets(STDIN));
            if(ctype_alpha($jugador[0])){
                $jugadorMinusculas = strtolower($jugador);
            }
        }
    }
    return $jugadorMinusculas;
}

/**11)
 * 
 */
function ordenarPartidas(){
    function compararPalabras($jugada1,$jugada2){
        if($jugada1["jugador"] == $jugada2["jugador"]){
            if($jugada1["palabraWordix"] == $jugada2["palabraWordix"]){
                $orden = 0;
            }
            else if ($jugada1["palabraWordix"] < $jugada2["palabraWordix"]){
                $orden = -1;
            }
            else $orden = 1;
        }
        else if ($jugada1["jugador"] < $jugada2["jugador"]){
            $orden = -1;
        }
        else $orden = 1;
    
        return $orden;
    }
    
    $arregloPalabras = cargarPartidas();
    uasort($arregloPalabras, 'compararPalabras');
    print_r ($arregloPalabras);
}



/** OPCION MENU 1
 * esta funcion solicita un numero del indice de la palabra y el nombre del jugador, si el numero del indice y el nombre del jugador ya estan almacenados en el array, entonces la funcion dic que la palabra fue utilizada, y vuelve a solicitar un numero de indice de palabra
 * @param array $palabras
 * @param array $palabrasUtilizadas
 * INT $numeroIngresado; $indicePartida, $i
 * STRING $nombreJugador
 * BOOLEAN $bandera
 */
    function jugarPalabra($palabras, &$palabrasUtilizadas) {
        echo "Ingrese un numero de palabra para jugar: (1-" . count($palabras) . ") \n";
        $numeroIngresado = solicitarNumeroEntre(1, count($palabras));
        $indicePartida = $numeroIngresado - 1;
        echo "Ingrese su nombre: ";
        $nombreJugador = trim(fgets(STDIN));

        $i = 0;
        $bandera = false; 
        while ($i < count($palabrasUtilizadas) && !$bandera) {
            if ($palabrasUtilizadas["indice de partida"][$i] == $indicePartida && $palabrasUtilizadas["nombre jugador"][$i] == $nombreJugador) {
                $bandera = true; 
            }
            $i++;
        }
        if ($bandera) {
            echo "La palabra ya fue utilizada. Intente nuevamente.\n";
        }
        $partida = jugarWordix(cargarColeccionPalabras()[$indicePartida], strtolower($nombreJugador));
        $palabrasUtilizadas["indice de partida"][] = $indicePartida;
        $palabrasUtilizadas["nombre jugador"][] = $nombreJugador;
        print_r($palabrasUtilizadas);

        return ["palabraWordix"=> $partida["palabraWordix"],"jugador" => $partida["jugador"], "intentos" => $partida["intentos"], "puntaje" => $partida["puntaje"]];
    }

    
    
    function jugarAleatorio($palabras, $palabrasUtilizada){
        echo "Ingrese su nombre: ";
        $nombreJugador = trim(fgets(STDIN));
        $i = 0;
        $bandera = true; 
        $partidaAleatoria = rand(18, count($palabras) - 1);

        if(count($palabrasUtilizada) > 0){
        while ($i <= count($palabrasUtilizada) && $bandera == true)  {
            echo "hola";
            if ($palabrasUtilizada[$i] == $partidaAleatoria) {
                echo "1"; 
                $bandera = true;
                echo "cambiando palabra";
            }else{
                $palabraNoRepetida = $partidaAleatoria;
                $bandera = false; 
            }
            $i++;
        }
    }
        $partida = jugarWordix($palabras[$partidaAleatoria], strtolower($nombreJugador));
        
        $palabrasUtilizadas[] = $partidaAleatoria;
        print_r($palabrasUtilizadas);

    }

    
    /**************************************/
    /*********** PROGRAMA PRINCIPAL *******/
    /**************************************/
    
//Declaración de variables:


//Inicialización de variables:
$partidas = cargarPartidas();
$palabras = cargarColeccionPalabras();
$palabrasUtilizadas = [];

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
    8) salir \n";
$opcion = solicitarNumeroEntre(1, 8);
    return $opcion;
}

do {
    $opcion=seleccionarOpcion();
    
    switch ($opcion) {

        case 1: 
            $partidas[] = jugarPalabra($palabras, $palabrasUtilizadas);
            break;

        case 2: 
            jugarAleatorio($palabras, $palabrasUtilizadas);

            break;

        case 3: 
            mostrarPartida();
            break;
        
        case 4: 
            primerPartidaGanada(primerPartidaGanadaIndice());
            break;
        
        case 5: 
            $resumenJugador = resumenJugador();

        if($resumenJugador["partidas"] > 0){
                 echo "\n*******************************\n";
                 echo "Jugador : " . $resumenJugador["jugador"] . "\n";
                 echo "Partidas : " . $resumenJugador["partidas"] . "\n";
                 echo "Puntaje Total: " . $resumenJugador["puntaje"] . "\n";
                 echo "Victorias: " . $resumenJugador["victorias"] . "\n";
                 echo "Porcentaje Victorias " . ($resumenJugador["victorias"] / $resumenJugador["partidas"]) * 100 . "\n";
                 echo "Adivinadas: " . "\n";
                     echo "----Intento 1: " . $resumenJugador["intento1"] . "\n";;
                     echo "----Intento 2: " . $resumenJugador["intento2"] . "\n";
                     echo "----Intento 3: " . $resumenJugador["intento3"] . "\n";
                     echo "----Intento 4: " . $resumenJugador["intento4"] . "\n";
                     echo "----Intento 5: " . $resumenJugador["intento5"] . "\n";
                     echo "----Intento 6: " . $resumenJugador["intento6"] . "\n";
                     echo "*******************************\n";
         }else{
         echo "El jugador no jugo ninguna partida\n";
         }
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


seleccionarOpcion();

