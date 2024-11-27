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
 * esta funcion muestra la partida jugada dependiendo el numero que ingrese el usuario.
 * INT $numeroPartida, $partidaElegida, $numeroDePartidas
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
 * @param  string $palabra
 * @return array
 */
function agregarPalabra($coleccionPalabras, $palabra){
    $coleccionPalabras[] = $palabra;
    return $coleccionPalabras;
}

/**8)
 * Funcion que solicita al usuario el nombre de un jugador y retorna el numero de indice de la primera partida ganada por el mismo, sino devuelve -1.
 * STRING $nombreJugador 
 * INT $i, $primeraGanadaIndice
 * BOOLEAN $priemraGanada
 * @return INT
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
 * Funcion que recibe como parametro un indice y muestra un resumen de la primera partida ganada por el jugador, si el jugador no jugo ni gano ninguna partida devuelve un mensaje de error
 * @param int $indice
 * 
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
 * Funcion que solicita al usuario el nombre de un jugador y muestra el resumen de sus partidas jugadas.
 * INT $partidasJugador, $acumPuntaje, $acumVictorias, $unIntento, $dosIntentos ,$tresIntentos ,$cuatroIntentos, $cincoIntentos, $seisIntentos, $i
 *  float[] array $partidas
 * STRING $jugador
 * @return array
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
  * Funcion que solicita al usuario su nombre y si el nombre contiene numeros le solicita que ingrese un nombre valido
    STRING $jugador
    @return STRING
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
 * uasort()=Ordena un array con una función de comparación definida por el usuario y mantiene la asociación de índices
 * print_r()= Imprime información legible para humanos sobre una variable o array
 * Funcion que ordena el arreglo de partidas alfabeticamente por nombre del jugador y luego por palabra jugada.
 * float[] array $arregloPalabras 
 */
function ordenarPartidas(){
    /**
     * Funcion que utiliza uasort para ordenar el array.
     * INT $orden 
     * @return INT
     */
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
 * Funcion que solicita al usuario un indice de palabra y un nombre de jugador, si el numero del indice y el nombre del jugador ya estan almacenados en el array, la funcion dice que la palabra ya fue utilizada, y vuelve a solicitar un numero de indice de palabra
 * @param array $palabras
 * @param array $palabrasUtilizadas
 * INT $numeroIngresado; $indicePartida, $i
 * STRING $nombreJugador
 * BOOLEAN $bandera
 * @return array 
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
            if ($palabrasUtilizadas["indicePartida"][$i] == $indicePartida && $palabrasUtilizadas["nombreJugador"][$i] == $nombreJugador) {
                $bandera = true; 
            }
            $i++;
        }
        if ($bandera) {
            echo "La palabra ya fue utilizada. Intente nuevamente.\n";
        }else{
        $partida = jugarWordix($palabras[$indicePartida], strtolower($nombreJugador));
        $palabrasUtilizadas["indicePartida"][] = $indicePartida;
        $palabrasUtilizadas["nombreJugador"][] = $nombreJugador;
        return ["palabraWordix"=> $partida["palabraWordix"],"jugador" => $partida["jugador"], "intentos" => $partida["intentos"], "puntaje" => $partida["puntaje"]];
        }

    }

    
    
    function jugarAleatorio($nombreJugador, $palabras, $partidas){
        $partidaRepetida = false;
        $palabraAleatoria = rand(18, count($palabras) - 1);

        foreach($partidas as $partida){
            if($partida["palabraWordix"] == $palabras[$palabraAleatoria] && $partida["jugador"] == $nombreJugador){
                $partidaRepetida = true;
            }
        }

        if($partidaRepetida == true){
            echo "No quedan palabras disponibles para jugar";
        }else{
            $partidaJugada = jugarWordix($palabras[$palabraAleatoria], strtolower($nombreJugador));
            return $partidaJugada;
        }
    

    //     if(count($palabrasUtilizada) > 0){
    //     while ($i <= count($palabrasUtilizada) && $bandera == true)  {
    //         echo "hola";
    //         if ($palabrasUtilizada[$i] == $partidaAleatoria) {
    //             echo "1"; 
    //             $bandera = true;
    //             echo "cambiando palabra";
    //         }else{
    //             $palabraNoRepetida = $partidaAleatoria;
    //             $bandera = false; 
    //         }
    //         $i++;
    //     }
    // }
    }


    

    
    /**************************************/
    /*********** PROGRAMA PRINCIPAL *******/
    /**************************************/
    
//Declaración de variables:
/**
 * INT $opcion
 */


//Inicialización de variables:
$partidas = cargarPartidas();
$palabras = cargarColeccionPalabras();
$palabrasUtilizadas = [];

//Proceso:

//$partida = jugarWordix("MELON", strtolower("MaJo"));
//print_r($partida);
//imprimirResultado($partida);


/** 3)
 * Funcion que muestra al usuario un Menu de opciones, retorna el numero ingresado por el usuario.
 * INT $opcion
 * return INT
 */
function seleccionarOpcion(){
    echo "\nMenu de opciones:
    1) Jugar al wordix con una palabra elegida
    2) Jugar al wordix con una palabra aleatoria
    3) Mostrar una partida
    4) Mostrar la primer partida ganadora
    5) Mostrar resumen de Jugador
    6) Mostrar listado de partidas ordenadas por jugador y por palabra
    7) Agregar una palabra de 5 letras a Wordix
    8) Salir 
    Ingrese su opcion: ";
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

            echo "Ingrese su nombre: ";
            $nombreDelJugador = trim(fgets(STDIN));
            $partidas[] = jugarAleatorio($nombreDelJugador, $palabras, $partidas);
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
         echo "El usuario no jugo ninguna partida\n";
         }
            break;
        
        case 6: 
            ordenarPartidas(); 
            break;
        
        case 7: 
            $palabras = agregarPalabra($palabras,leerPalabra5Letras());
            print_r($palabras);
            break;
        
    }
} while ($opcion != 8);


seleccionarOpcion();

