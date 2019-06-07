 <?php

function meses($nmes){
    if ($nmes==1){
        print "Janeiro\n";
    }
    if ($nmes==2){
        print "Fevereiro\n";
    }
    if ($nmes==3){
        print "Março\n";
    }
    if ($nmes==4){
        print "Abril\n";
    }
    if ($nmes==5){
        print "Maio\n";
    }
    if ($nmes==6){
        print "Junho\n";
    }
    if ($nmes==7){
        print "Julho\n";
    }
    if ($nmes==8){
        print "Agosto\n";
    }
    if ($nmes==9){
        print "Setembro\n";
    }
    if ($nmes==10){
        print "Outubro\n";
    }
    if ($nmes==11){
        print "Novembro\n";
    }
    if ($nmes==12){
        print "Dezembro\n";
    }

}

print "Qual o número do mês:";
$nmes=(int)fgets(STDIN);

meses($nmes);
