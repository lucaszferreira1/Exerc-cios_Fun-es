<?php

function farenheit ($farenheit){
    $celsius=($farenheit-32)*5/9;
    print "$celsius";
}
$farenheit=farenheit(274);
