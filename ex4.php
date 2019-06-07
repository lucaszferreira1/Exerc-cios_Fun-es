<?php 

function pesoideal ($altura,$sexo){
    if ($sexo=1){
        $pesoideal=(62.1*$altura)-44.7;
        print "$pesoideal kg";
    }
    elseif ($sexo=2){
        $pesoideal=(72.7*$altura)-58;
        print "$pesoidal kg"; 
    }
}
print "Qual o seu sexo?1-Feminino 2-Masculino 3-Prefiro não dizer:?";
$sexo=(int)fgets(STDIN);
print "Qual a sua altura?:";
$altura=(float)fgets(STDIN);

$pesoideal=pesoideal($sexo,$altura);
