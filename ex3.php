<?php

function notas ($nota1,$nota2){
    $media=($nota1+$nota2)/2;
    if ($media<6){
        print "Você foi reprovado!\n";
    }
    else {
        print "PARABÉNS! Você foi aprovado(a)\n";
    }
}
print "Qual a primeira nota?:";
$nota1=(float)fgets(STDIN);
print "Qual a segunda nota?:";
$nota2=(float)fgets(STDIN);

$media=notas ($nota1,$nota2);
