<?php


$casos = (int) fgets(STDIN);

for ( $caso = 0; $caso < $casos; $caso++){

    $infoCaso = fgets(STDIN);

    procesar($infoCaso);

}

function procesar($caso){

    $url = "https://www.omdbapi.com/?apikey=a2f26b99&";
    $casoExp = explode(" ", $caso);

    $url .= (strcmp($casoExp[0], "t") == 0)
            ? "t=" . $casoExp[1]
            : "s=" . $casoExp[1];


    realizarPeticion($url);

}

function realizarPeticion($url){


    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = curl_exec($ch);
    curl_close($ch);

    var_dump($data);


}
