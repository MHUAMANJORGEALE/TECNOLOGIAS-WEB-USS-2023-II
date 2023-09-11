<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php test</title>
</head>
<body>
    <?php
        echo "Hola Mundo"."<br>";
    ?>
    <?php
        /*
            Este while lo que hace es imprimir los meses del año que toma del arra $meses, y que lo imprime siempre hasta que sea menor igual (<=) a 11
            ya que un array empieza siempre con 0 mas no con 1
        */
        $a=0;
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        //echo $meses[0]; -- Podemos imprimir un dato del array si sabemos su indice.
        while ($a <= 11) {
            echo $meses[$a++]."<br>";
        }


    ?>
</body>
</html>