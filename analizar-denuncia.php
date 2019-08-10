<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menú Denuncias</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/margenes-padding.css">
    <link rel="stylesheet" href="css/navbar.css">   
</head>
<body class=from>
    <nav>
            <a href="index.html" class="nav-enlace">Inicio</a>
            <a href="insertar-denuncia.html" class="nav-enlace">Denunciar</a>
            <a href="analizar-denuncia.php" class="nav-enlace">Analizar Denuncia</a>
            <a href="nombrar-equipo.php" class="nav-enlace">Nombrar Equipo</a>
            <a href="informe-denuncia.php" class="nav-enlace">Informe Denuncia</a>
    </nav>  

    <hr>
    <h2>MENÚ DE ACEPTACIÓN DE DENUNCIAS.</h2>
    <hr>
    <br>
        <table>
            <tr>
                    <td>CÓDIGO DENUNCIA     </td>
                    <td>MOTIVO DENUNCIA </td>
                    <td>NOMBRE DENUNCIADO     </td>
                    <td>APELLIDOS DENUNCIADO     </td>
                    <td>CARRERA DENUNCIADO     </td>
                    <td>DESCRIPCIÓN FÍSICA DENUNCIADO     </td>
                    <td>CONTEXTO DE LA DENUNCIA     </td>
                    <td>DETALLE DE LA DENUNCIA     </td>
  
            </tr>

            <?php
            require_once"conexion_bdd.php";
            $conexion= conexion();
            $sql="select * from DENUNCIA where DENUNCIA.DENUNCIA_ESTADO='pendiente'";
            $result = mysqli_query($conexion, $sql);

            while($mostrar = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>"; echo $mostrar['COD_DENUNCIA']; echo "</td>";
                    echo "<td>"; echo $mostrar['DENUNCIA_MOTIVO']; echo "</td>";
                    echo "<td>"; echo $mostrar['DENUNCIA_NOMBRE']; echo "</td>";
                    echo "<td>"; echo $mostrar['DENUNCIA_APELLIDOS']; echo "</td>";
                    echo "<td>"; echo $mostrar['DENUNCIA_CARRERA']; echo "</td>";
                    echo "<td>"; echo $mostrar['DENUNCIA_DESCRIPCION_FISICA']; echo "</td>";
                    echo "<td>"; echo $mostrar['DENUNCIA_CONTEXTO']; echo "</td>";
                    echo "<td>"; echo $mostrar['DENUNCIA_DETALLE']; echo "</td>";
                    

                    //$foto = $mostrar['DENUNCIA_PRUEBA'];
                    //<img src="data:image/jpeg;base64,'.base64_encode($row['$mostrar['DENUNCIA_PRUEBA']'])'">
                    //echo "<td>";  echo"<img src="$row['$foto']">";   echo"</td>";
                    echo "<td>  <a href='aceptar_denuncia.php?no=".$mostrar['COD_DENUNCIA']."'> <button type='button' class='btn btn-success'>ACEPTAR</button> </a> </td>";
                    echo "<td>  <a href='rechazar_denuncia.php?no=".$mostrar['COD_DENUNCIA']."'> <button type='button' class='btn btn-success'>RECHAZAR</button> </a> </td>";

                    echo "</tr>";
                }
            ?>
        </table>


        <hr>   
</body>
</html>