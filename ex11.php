<?php

function polegadas ($npolegadas){

    $resultado=$npolegadas*2.5;
    print "O resultado é $resultado cm";

    return ($resultado);
}

print "Quantas polegadas(pol):";
$npolegadas=(float)fgets(STDIN);

polegadas ($npolegadas);
