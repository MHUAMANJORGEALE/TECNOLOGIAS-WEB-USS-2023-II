<?php
    /*creacion de una clase php que tenga tres funciones:
    
    Función depositar: esta función permitira aumentar el saldo.
    Función retirar: esta función permitirá debitar el saldo.
    Función mostrar saldo: nos permite mostrar el saldo actual.
    Probar las funciones.
    */
    $saldo= 1205;
    $D1=depositar(150);
    echo $D1;
    echo "Saldo: ".$saldo;    
    function depositar($deposito){
        global $saldo;
        $saldo = $saldo + $deposito;
        echo "<br> Saldo agregado:".$deposito;
        echo "<br>Saldo total:";
        return $saldo; 
    }




    
    
?>