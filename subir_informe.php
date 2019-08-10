<?php
require_once"conexion_bdd.php";
$conexion= conexion();

$COD_DENUNCIA = $_POST['seleccionar'];

$nombreinforme = $_FILES['informe']['name'];     //OBTENER EL NOMBRE
$archivo = $_FILES['informe']['tmp_name'];      //CONTIENE EL ARCHIVO
$formato_archivo = $_FILES['informe']['type'];

$ruta = "evidencias";

$ruta = $ruta."/".$nombreinforme;   //NOMBRA EL INFORME CON EL CODIGO DE LA DENUNCIA

move_uploaded_file($archivo,$ruta);

$sentencia = "UPDATE DENUNCIA SET DENUNCIA_INFORME='.$ruta.' WHERE COD_DENUNCIA ='$COD_DENUNCIA'";
$resultado = mysqli_query($conexion, $sentencia) or die (mysqli_error());

if (mysqli_query($conexion, $sentencia)) {
    echo '<script type="text/javascript">
    alert("Informe agregado correctamente.");
    window.location.assign("informe-denuncia.php");
  </script>';
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
  }
?>