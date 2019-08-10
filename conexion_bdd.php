<?php
    function conexion(){
/*  CONEXION LOCAL HOST
        $servidor ="146.83.194.142:3306";   
        $usuario = "grupo4isw";
        $pass = "g4r2019";
        $bd = "g4bd";          
*/
$servidor ="localhost";
$usuario = "root";
$pass = "";
$bd = "g4bd";  

        $conexion = mysqli_connect($servidor,$usuario,$pass,$bd);

        return $conexion;
    }
?>