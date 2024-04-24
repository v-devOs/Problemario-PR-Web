<?php

$casos = (int) fgets(STDIN);

for($caso = 0; $caso < $casos; $caso++){

    $infoCaso = fgets(STDIN);

    procesarCaso($infoCaso);

}

function procesarCaso($caso){

    $salida = "";
    $pildSobrantes = 0;
    $numDespachosRealizados = 0;
    $pildDespachadas = 0;
    $seSumaronPildSobrantes = false;


    $casoExp = explode(" ", $caso);
    $numDespachos = (int) $casoExp[0];

    for ($despacho = 1; $despacho <= $numDespachos; $despacho++){

        $pildDespachadas += (int) $casoExp[$despacho];
        $numDespachosRealizados++;

        if (!$seSumaronPildSobrantes){
            $pildDespachadas += $pildSobrantes;
            $seSumaronPildSobrantes = true;
        }

        if ($pildDespachadas >= 100 ){
            $pildSobrantes = $pildDespachadas - 100;
            $pildDespachadas = 0;
            $salida .= " " . $numDespachosRealizados;
            $numDespachosRealizados = 0;
            $seSumaronPildSobrantes = false;
        }


    }


    echo trim($salida) . "\n";
}