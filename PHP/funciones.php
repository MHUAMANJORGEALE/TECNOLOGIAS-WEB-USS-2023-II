<?php
    //función sin parametros

    function mostrarDatos(){
        echo "Este es un mensaje utilizando la función sin parametros"."<br>";
    }
    
    //función con parametros
    function mostrarMensaje($mensaje){
        $a=$mensaje;
        echo $a;
    }
    $M1= mostrarDatos();
    $M2 = mostrarMensaje("Este es un mensaje y esta utilizando la función con parametros."."<br>");
    echo $M1."<br>";
    echo $M2;

    function mostrarDoWhile(){
        static $i=10;
        do{
            echo $i."<br>";
            $i++;
        }while($i<=10);
    }
    mostrarDoWhile();
    mostrarDoWhile();
    mostrarDoWhile();
    mostrarDoWhile();
?>