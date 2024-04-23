<?php

$casos = (int) trim(fgets(STDIN));


for ($reps = 0; $reps < $casos; $reps++) {
    $email = trim(fgets(STDIN));

    $isValid = validarEmail($email);

    if($isValid) analizarEmail($email);

}

function validarEmail($email): bool
{
    $patron = "/\@{2}/";

    if( preg_match_all($patron, $email)){
        echo "DOMINIO INCORRECTO" . "\n";
        return false;
    }
    else return true;
}

function analizarEmail($email){

    $emailExp = explode("@", $email);

    $result = analizarParte($emailExp[0], false);

    if( $result ){
        analizarParte($emailExp[1], true);
    }

}

function analizarParte($part, $esDominio){


    $patronUno = "/@/";
    $patronDos = "/\.{2}/";


    if( $esDominio ){
        if( preg_match($patronUno, $part ) || preg_match_all($patronDos, $part)) {
            echo "DOMINIO INCORRECTO" . "\n";
            return false;
        }
        else {
            echo $part . "\n";
            return true;
        }
    }
    else {
        if( preg_match_all($patronDos, $part)) {
            echo "USUARIO INCORRECTO" . "\n";
            return false;
        }
        else return true;
    }

}

