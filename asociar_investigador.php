<?php

$rut_investigador = $_POST['seleccionar'];
$cod_denuncia = $_POST['COD_DENUNCIA'];

require_once"conexion_bdd.php";
$conexion= conexion(); 

$sentencia="INSERT INTO NOMBRAR_EQUIPO (COD_DENUNCIA, USUARIO_RUT)  
VALUES(
  '$cod_denuncia',
  '$rut_investigador'    
)";

//CAMBIA ESTADO DE DENUNCIA A ASIGNADA
$conexion2= conexion();  
$sentencia2="UPDATE DENUNCIA SET DENUNCIA_ESTADO = 'asignada' WHERE COD_DENUNCIA='$cod_denuncia' ";
$resultado=mysqli_query($conexion2, $sentencia2) or die (mysqli_error());

if (mysqli_query($conexion, $sentencia)) {
  echo '<script type="text/javascript">;
  alert("Investigador asociado correctamente.");
  window.location.assign("nombrar-equipo.php");
</script>';
} else {
  echo "Error: " . $sentencia . "<br>" . mysqli_error($conexion);     
}
?>