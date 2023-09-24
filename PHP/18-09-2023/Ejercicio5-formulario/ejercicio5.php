<?php
    function ejercicio5(){
        $tipoLlamada =$_POST['tipo-llamada'];
        $min = $_POST['minutos'] ;
        switch ($tipoLlamada) {
            case 'Local':
                 
                $cobro = $min * 1.00;
                break;
            case 'Nacional':
             
                $cobro = $min * 2.00;
                break;
            case 'Internacional':
                 
                $cobro = $min * 8.00; 
                break;    
            default:
                echo "Agregue una opcion valida";
                break;
        }
    }
     echo "La llamada fue de tipo: ".$_POST['tipo-llamada']." y el cobro total es: ".$cobro."<p>";
        echo $_POST['tipo-llamada'];
    ejercicio5();
    var_dump($_POST);

?>