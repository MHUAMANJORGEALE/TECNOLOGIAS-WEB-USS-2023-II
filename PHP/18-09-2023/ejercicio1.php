<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function ejercicio1($a,$b,$c){
        $g=1.5;
        $x=(($b**2) - ($c*10)) / ($a*($b)+1) + $g- $a/$b;
        echo "El resultado del ejercicio 1 es:".$x."<br>";
    }
    echo ejercicio1(3,2,1);

    function ejercicio2($A,$B,$C){
        $M = (-1)*(sqrt(($B-$A)-$C / ($B+1+$A)) / (pow(pow($B,3)+$C,1/4)));
        $N = sqrt($A * $B - 5 * $C) / sqrt($B*$C);

        ECHO $M."<br>";
        ECHO $N."<br>";
    }
    ejercicio2(1,20,3);

    #Ejercicio 3
    function ejercicio3(){
        $a=0;
        do {
            # code...
            $rIncorrectas = rand(0,25);
            $rCorrectas = rand(0,25 - $rIncorrectas);
            $respuestas = $rCorrectas + $rIncorrectas;
            echo "<p>"."El alumno con el codigo: ".$a++."<br>";
            echo "La cantidad de respuestas correctas es: ".$rCorrectas."<br>";
            echo "La cantidad de respuestas incorrectas es: ".$rIncorrectas."<br>";
            echo "La cantidad de preguntas totales es: ".$respuestas."<dev>";
        }while($a <= 10);
            
    }
    ejercicio3();
    #Ejercicio 4
    function ejercicio4($a){
        $descuent1 = 0.02 * $a;
        $descuent2 = 0.027 * $a;
        $descuent3 = 0.015 * $a;
        $descuent4 = 0.05 * $a;
        $pagofinal = $a - ($descuent1 + $descuent2 + $descuent3 + $descuent4);
        echo "<p>"."El descuento del sueldo base por ley de politica habitacional es:".$descuent1."<br>";
        echo "El descuento del sueldo base por Seguro Social es:".$descuent2."<br>";
        echo "El descuento del sueldo base por Seguro paro forzoso es:".$descuent3."<br>";
        echo "El descuento del sueldo base por Caja de ahorro es:".$descuent4."<br>";
        echo "El pago final al trabajador es: ".$pagofinal; 
    }
    ejercicio4(1025);
    #Ejercicio 5
    ?>
</body>
</html>