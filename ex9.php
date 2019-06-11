 <?php

function ex9 ($n1,$n2){
    print "Digite o primeiro número:";
    $x=(int)fgets(STDIN);
    print "Digite o segundo número:";
    $y=(int)fgets(STDIN);

    $divisao=$x/$y;
    if ($divisao>0){
        print "1";
    }
    elseif($divisao<0){
        print "0";
    }
}
