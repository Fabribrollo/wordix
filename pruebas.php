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



// function mostrarPartida(){
//     $numeroDePartidas = count(cargarPartidas());
//     echo "Ingrese el numero de partida para mostrar (1-" . $numeroDePartidas . ")";
//     $partidaElegida = trim(fgets(STDIN)) - 1;
//     echo "\n*******************************\n";
//     echo "Partida WORDIX " . $partidaElegida + 1 . " palabra " . cargarPartidas()[$partidaElegida]["palabraWordix"]. ". \n";
//     echo "Jugador: " . cargarPartidas()[$partidaElegida]["jugador"]. ". \n";
//     echo "Puntaje: " . cargarPartidas()[$partidaElegida]["puntaje"] . ". \n";
//     if(cargarPartidas()[$partidaElegida]["puntaje"] == 0){
//         echo "Intento: No adivinó la palabra. \n";
//     }else{
//         echo "Intento: Adivinó la palabra en " . cargarPartidas()[$partidaElegida]["intentos"] . " intentos.". " \n";
//     }
//     echo "\n*******************************\n";
// }

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
    $coleccionPartidas[9] = ["palabraWordix"=> "MUJER","jugador" =>"miguel", "intentos" => 5 , "puntaje" => 11];
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
            // echo "************************ \n";
            // echo "partida WORDIX " . "palabra " . cargarPartidas()[$i]["palabraWordix"];
            // echo "puntaje: " . cargarPartidas()[$i]["puntaje"];
            // echo "intento: " . cargarPartidas()[$i]["intentos"];
            // echo "************************ \n";
            $primeraGanada = false;
            $primeraGanadaIndice = $i;
        }
        $i++;
    }
    return $primeraGanadaIndice;
}

echo primerPartidaGanada();
