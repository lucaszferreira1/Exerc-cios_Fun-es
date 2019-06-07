<?php

function poligonos ($nlados,$lado){
    if ($nlados==3){
        $perimetro=$lado*3;
        print "Triângulo\n";
        print "Perimetro=$perimetro\n";
    }
    if ($nlados==4){
        $area=$lado**2;
        print "Quadrado\n";
        print "A area é $area\n";
    }
    if ($nlados==5){
        print "Pentágono\n";
    }
}

print "Quantos lados?:";
$nlado=(int)fgets(STDIN);
print "Medida dos lados:";
$lado=(float)fgets(STDIN);

$area=poligonos($nlado,$lado);
