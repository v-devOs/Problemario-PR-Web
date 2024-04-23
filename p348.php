<?php
$fecha = fgets(STDIN);

$url = "https://tigger.celaya.tecnm.mx/conacad/recursos/juez/acceConacad.php?fecha=" .$fecha;

$resp = file_get_contents("https://pokeapi.co/api/v2/pokemon/ditto");

if ( $resp )
    echo $resp;













