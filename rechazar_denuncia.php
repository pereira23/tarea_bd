<?php
require_once"conexion_bdd.php";
$conexion= conexion(); 
$consulta=recuperar_codigo_denuncia($_GET['no']);
 echo $consulta;

function recuperar_codigo_denuncia($no_prod)
{
  require_once"conexion_bdd.php";
  $conexion= conexion();  
  $sentencia="UPDATE DENUNCIA SET DENUNCIA_ESTADO = 'rechazada' WHERE COD_DENUNCIA='".$no_prod."' ";
  $resultado=mysqli_query($conexion, $sentencia) or die (mysqli_error());

  if (mysqli_query($conexion, $sentencia)) {
    echo '<script type="text/javascript">
    alert("Denuncia rechazada correctamente.");
    window.location.assign("analizar-denuncia.php");
  </script>';
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
  }
}
?>