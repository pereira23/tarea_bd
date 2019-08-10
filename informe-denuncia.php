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
    <h2>MENÚ DE INFORME DE DENUNCIAS.</h2>
    <hr>

<!--
        <p>Seleccionar Denuncia: 
            <select name="motivo_denuncia" >
                <option value="1">DENUNCIA 1</option>
                <option value="2">DENUNCIA 2</option>
            </select></p>

            <form action="subida-de-archivo.php" method="post" enctype="multipart/form-data">
                <input type="file" name="foto" />
                <input type="submit" value="subir archivo" />
            </form>  
-->
    <!-- <form action="procesar_informe.php" method="POST"> -->
    <form enctype="multipart/form-data" action="subir_informe.php" method="POST">    
        <p>Denuncia:
        <select id='seleccionar' name='seleccionar'> 
            <?php                             
                require_once"conexion_bdd.php";
                $conexion= conexion();
                $sql="select * from DENUNCIA where DENUNCIA_ESTADO ='asignada'";
                $resultado=mysqli_query($conexion, $sql) or die (mysqli_error());  

                while($mostrar = mysqli_fetch_array($resultado))
                    {
                        echo '<option value="'.$mostrar['COD_DENUNCIA'].'">'.$mostrar['COD_DENUNCIA'].'</option>';
                    }                                
                 echo"</select>";            
            
        echo"</select> ";
        echo"</p>";

        //SUBIDA DE ARCHIVO           

        echo"<input name='informe' type='file' />";
        echo"<p>";
        echo"<input type='submit' value='Enviar' />";
        echo"</p>";

        echo"</form>";
        ?>
    </form>                    
    <hr>
</body>
</html>