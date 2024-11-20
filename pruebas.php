<?php   

// function cargarPartidas(){
//     $coleccionPartidas[0] = ["palabraWordix"=> "FUEGO","jugador" =>"juan", "intentos" => 0 , "puntaje" => 0];
//     $coleccionPartidas[1] = ["palabraWordix"=> "YUYOS","jugador" =>"ariel", "intentos" => 1 , "puntaje" => 6];
//     $coleccionPartidas[2] = ["palabraWordix"=> "QUESO","jugador" =>"miguel", "intentos" => 4 , "puntaje" => 3];
//     $coleccionPartidas[3] = ["palabraWordix"=> "HUEVO","jugador" =>"oscar", "intentos" => 2 , "puntaje" => 5];
//     $coleccionPartidas[4] = ["palabraWordix"=> "GOTAS","jugador" =>"ariel", "intentos" => 3 , "puntaje" => 4];
//     $coleccionPartidas[5] = ["palabraWordix"=> "MELON","jugador" =>"juan", "intentos" => 2 , "puntaje" => 5];
//     $coleccionPartidas[6] = ["palabraWordix"=> "FUEGO","jugador" =>"ariel", "intentos" => 6 , "puntaje" => 0];
//     $coleccionPartidas[7] = ["palabraWordix"=> "FUEGO","jugador" =>"juli", "intentos" => 6 , "puntaje" => 0];
//     $coleccionPartidas[8] = ["palabraWordix"=> "FUEGO","jugador" =>"juan", "intentos" => 0 , "puntaje" => 0];
//     $coleccionPartidas[9] = ["palabraWordix"=> "MUJER","jugador" =>"miguel", "intentos" => 5 , "puntaje" => 11];
//     $coleccionPartidas[10] = ["palabraWordix"=> "BARCO","jugador" =>"rodri", "intentos" => 5, "puntaje" => 11];

//     return $coleccionPartidas;
// }



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

// mostrarPartida();

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
    $coleccionPartidas[9] = ["palabraWordix"=> "MUJER","jugador" =>"miguel", "intentos" => 5 , "puntaje" => 0];
    $coleccionPartidas[10] = ["palabraWordix"=> "BARCO","jugador" =>"rodri", "intentos" => 5, "puntaje" => 11];

    return $coleccionPartidas;
}


function primerPartidaGanada()  {
    echo "Ingrese el nombre de un jugador: ";
    $nombreJugador = trim(fgets(STDIN));
    $i = 0;
    $primeraGanada = true;
    $primeraGanadaIndice = -1;
    while( $i < count(cargarPartidas()) && $primeraGanada ){
        echo $i;
        if (cargarPartidas()[$i]["jugador"] == $nombreJugador && cargarPartidas()[$i]["intentos"] > 0 && cargarPartidas()[$i]["puntaje"] > 0){
            $primeraGanada = false;
            $primeraGanadaIndice = $i;
        }
        $i++;
    }
    return $primeraGanadaIndice;
}


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
    if($partidasJugador > 0){
            echo "\n*******************************\n";
            echo "Jugador : " . $jugador . "\n";
            echo "Partidas : " . $partidasJugador . "\n";
            echo "Puntaje Total: " . $acumPuntaje . "\n";
            echo "Victorias: " . $acumVictorias . "\n";
            echo "Porcentaje Victorias " . ($acumVictorias / $partidasJugador) * 100 . "\n";
            echo "Adivinadas: " . "\n";
                echo "----Intento 1: " . $unIntento . "\n";;
                echo "----Intento 2: " . $dosIntentos . "\n";
                echo "----Intento 3: " . $tresIntentos . "\n";
                echo "----Intento 4: " . $cuatroIntentos . "\n";
                echo "----Intento 5: " . $cincoIntentos . "\n";
                echo "----Intento 6: " . $seisIntentos . "\n";
                echo "*******************************\n";
    }else{
    echo "El jugador no existe";
    }
}


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



?>