<html>
<?php

$motivo_denuncia = $_POST['motivo_denuncia'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$carrera = $_POST['carrera'];
$descripcion_fisica = $_POST['descripcion_fisica'];
$contexto_denuncia = $_POST['contexto_denuncia'];
$descripcion_denuncia = $_POST['descripcion_denuncia'];

$nombreprueba = $_FILES['prueba']['name'];     //OBTENER EL NOMBRE
$archivo = $_FILES['prueba']['tmp_name'];      //CONTIENE EL ARCHIVO
$ruta = "pruebas";
$ruta = $ruta."/".$nombreprueba;   //NOMBRA EL INFORME CON EL CODIGO DE LA DENUNCIA

move_uploaded_file($archivo,$ruta);

$numero_random = rand (1, 10000);

require_once"conexion_bdd.php";
$conexion= conexion();

//SENTENCIA SQL
$sql="INSERT INTO DENUNCIA (COD_DENUNCIA, DENUNCIA_MOTIVO, DENUNCIA_NOMBRE, DENUNCIA_APELLIDOS, DENUNCIA_CARRERA, DENUNCIA_DESCRIPCION_FISICA, DENUNCIA_CONTEXTO, DENUNCIA_DETALLE, DENUNCIA_PRUEBA, DENUNCIA_INFORME, DENUNCIA_ESTADO) 
VALUES($numero_random,
    '$motivo_denuncia',
    '$nombre',
    '$apellidos',
    '$carrera',
    '$descripcion_fisica',
    '$contexto_denuncia',
    '$descripcion_denuncia',
    '.$ruta.',
    '',
    'pendiente')";

if (mysqli_query($conexion, $sql)) {
    echo '<script type="text/javascript">
    alert("Denuncia aceptada correctamente.");
    window.location.assign("index.html");
  </script>';
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
  }
?>
</html>

