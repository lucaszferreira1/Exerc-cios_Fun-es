<?php

function ex10 ($n1,$n2){

if ($n1>$n2){
    print "Primeiro número é maior\n";
}
elseif($n2>$n1){
    print "Segundo número é maior\n";
}
elseif($n1==$n2){
    print "Os números são os mesmos\n";
}

}

print "Digite o primeiro número:";
$n1=(int)fgets(STDIN);
print "Digite o segundo número:";
$n2=(int)fgets(STDIN);

ex10 ($n1,$n2);
