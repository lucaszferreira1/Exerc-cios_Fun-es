<?php

function diassemana ($n){
    print "Digite um número de 1 até 7";
    $n=(int)fgets(STDIN);

    if ($n==1){
        print "DOM";
    }
    elseif($n==2){
        print "SEG";
    }

    elseif ($n==3){
        print "TER";
    }
    elseif($n==4){
        print "QUA";
    }
    elseif($n==5){
        print "QUI";
    }
    elseif($n==6){
        print "SEX";
    }
    elseif ($n==7){
        print "SÁB";
    }
    elseif ($n<=7 or $n>=1){
        print "Número acima de 7 ou abaixo de 1 desculpe mas é impossível mostrar algo";
    }
}

diassemana($n);
