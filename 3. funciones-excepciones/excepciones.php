<?php
    $numero=20;
    try {
        $numero1=$numero+"f";
    } catch (\Throwable $th) {
        echo"Error";
    }
?>