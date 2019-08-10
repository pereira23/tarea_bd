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
    <h2>AQUI SE NOMBRARAN LOS EQUIPOS DE INVESTIGADORES</h2>
    <hr>
    <br>
        <table>
            <tr>
                    <td>CÓDIGO   </td>
                    <td>MOTIVO   </td>
                    <td>CARRERA  </td>
                    <td>ESTADO    </td>
                    <td> INVESTIGADOR </td>
  
            </tr>

            <?php
            require_once"conexion_bdd.php";
            $conexion= conexion(); 
            $consulta=recuperar_codigo_denuncia($_GET['no']);
             echo $consulta;
            
            function recuperar_codigo_denuncia($no_prod)
            {
              require_once"conexion_bdd.php";
              $conexion= conexion();  
              $sentencia="SELECT * FROM DENUNCIA WHERE COD_DENUNCIA='".$no_prod."' ";
              $resultado=mysqli_query($conexion, $sentencia) or die (mysqli_error());       

                    while($sentencia = mysqli_fetch_array($resultado))
                    {
                        echo"<form action='asociar_investigador.php' method='POST'>";
                        echo "<tr>";
                        echo "<td>"; echo $sentencia['COD_DENUNCIA']; echo "</td>";
                        echo "<td>"; echo $sentencia['DENUNCIA_MOTIVO']; echo "</td>";
                        echo "<td>"; echo $sentencia['DENUNCIA_CARRERA']; echo "</td>";
                        echo "<td>"; echo $sentencia['DENUNCIA_ESTADO']; echo "</td>";  
                        echo "<td>";               
                                                   echo"<input type='hidden' name='COD_DENUNCIA' value='".$sentencia['COD_DENUNCIA']."'>";
                                                   echo"<select id='seleccionar' name='seleccionar'>";
                                                   $sql="select * from USUARIO where USUARIO.USUARIO_TIPO ='investigador'";
                                                   $result = mysqli_query($conexion, $sql);
                                           
                                                   while($mostrar = mysqli_fetch_array($result))
                                                       {
                                                           echo '<option value="'.$mostrar['USUARIO_RUT'].'">'.$mostrar['USUARIO_NOMBRE'].''.$mostrar['USUARIO_APELLIDOS'].'</option>';
                                                       }                                
                                                    echo"</select>";
                                                    echo"<p><input type='submit' value='Vincular'></p>";
                                                             
                        echo "</td>";                            
                        echo "</tr>";  
                                                           
                    } 


            }
      ?>
        </table>
        <hr>  
</body>
</html>