<?php
    //llamada de funciones
    holamundo();
    saludar("Jorge");
    $num3= suma(10,15);
    echo"Sumar: ".$num3;
    function holamundo(){
        print("Hola mundo <br>");
    }
    
    function saludar( $nombre ){
        print("Hola, $nombre <br>");
    }

    function suma($num1,$num2){
        $resultado = $num1 + $num2;
        return $resultado;
    }
?>