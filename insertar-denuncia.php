<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingresar Denuncia</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/margenes-padding.css">
    <link rel="stylesheet" href="css/navbar.css">    
</head>
<body class=from>
    <nav>
        <a href="index.html" class="nav-enlace">Inicio</a>
        <a href="insertar-denuncia.html" class="nav-enlace">Comprar Patente</a>
        <a href="analizar-denuncia.php" class="nav-enlace">Analizar Denuncia</a>
        <a href="nombrar-equipo.php" class="nav-enlace">Nombrar Equipo</a>
        <a href="informe-denuncia.php" class="nav-enlace">Informe Denuncia</a>
</nav>  
    <div>
        <hr>
        <h2>
                <b>COMPRAR PATENTE</b>
        </h2>
        <hr>

            <form enctype="multipart/form-data" action="procesar_compra.php" method="POST">    <!-- DONDE SE SOLICITAN LOS DATOS DE LA COMPRA-->
                SELECCIONAR PATENTE:

                <?php
                require_once"conexion_bdd.php";
                    echo"<input type='hidden' name='NUMERO_PATENTE'>";
                    echo"<select id='seleccionar' name='seleccionar'>";
                    $sql="select * from PATENTE";
                    $result = mysqli_query($conexion, $sql);
                                               
                    while($mostrar = mysqli_fetch_array($result))
                        {
                            echo '<option value="'.$mostrar['NUMERO_PATENTE'].'">'.$mostrar['NUMERO PATENTE'].'</option>';
                        }                                
                        echo"</select>";
                        echo"<p><input type='submit' value='Vincular'></p>";  
                ?>

                <!--
                <p>Motivo de denuncia<br>
                    <select name="motivo_denuncia" >
                        <option value="perturbacion-correcta-evaluacion">Impedimiento de realización de una evaluación</option>
                        <option value="suplanteamiento-identidad">Suplantamiento en algun actividad Universitaria</option>
                        <option value="uso-indebido-de-bienes">Uso indebido deee bienes o recintos de la Unversidad</option>
                        <option value="actos-ofenda-moral">Actos que ofendan la moral o las buenas costumbres</option>
                        <option value="informacion-anticipada-certamenes">Obtención de información anticipada de examenes</option>
                        <option value="eventos-no-autorizados">Participación en actos o manifestaciones no autorizadas</option>
                        <option value="sustraje-de-bienes">Apropiación o sustraje de bienes, documentos o valores</option>
                        <option value="daño-a-bienes">Daño a bienes Universitarios o de terceros</option>
                        <option value="otro">Otros</option>
                    </select></p>
                    
                <p>Nombre<br>   
                    <input type="text" name="nombre" 
                    placeholder="Nombre"
                    /></p>

                <p>Apellidos<br>
                    <input type="text" name="apellidos" 
                    placeholder="Apellido Paterno y Materno"
                    /></p>

                <p>Carrera<br>
                    <input type="text" name="carrera" 
                    placeholder="Carrera"
                    /></p>

                    <label for="descripcion_fisica">Descripción Física del denunciado</label>
                    <br>
                    <textarea name="descripcion_fisica" placeholder="Descripción Fisica del denunciado" required
                    cols="60" rows="5"  ></textarea>
                    <br>      

                    <label for="contexto_denunciaia">Contexto de la situación a denunciar</label>
                    <br>
                    <textarea name="contexto_denuncia" placeholder="Contexto de la situación a denunciar" required
                    cols="60" rows="5"  ></textarea>
                    <br>   

                    <label for="descripcion_denuncia">Descripción detallada de denuncia</label>
                    <br>
                    <textarea name="descripcion_denuncia" placeholder="Descripción detallada de denuncia" required
                    cols="60" rows="5"  ></textarea>
                    <br><br>       
                    
                    <label for="adjuntar prueba">Adjuntar Prueba</label>
                    <br>
                    <input name="prueba" type='file'/>
 
                <p><input type="submit" value="Enviar"></p>    
                -->
        <hr>    
    </div>
</body>
</html>