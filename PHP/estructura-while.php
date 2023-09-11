<?php
    //Primera forma
    $numero= 0;
    while ($numero <= 10) {
        echo $numero."<br>";
        $numero ++;
    }

    //Segunda forma
    for ($i=1; $i <= 10 ; $i++) { 
        echo $i."<br>";
    }
    //tercera forma
    $a=1;
    do {
        echo $a++;
    } while ($a <= 10);
?>