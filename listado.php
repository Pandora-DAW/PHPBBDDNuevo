<?php   require_once('plantillas/cabecera.php'); ?>

<article>
    <h2>Listado de alumnos matriculados</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido1</th>
                <th>Apellido2</th>
                <th>Fecha de Nacimiento</th>
                <th>Correo Electrónico</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
       
       <?php
            $consulta ="SELECT * FROM alumnos";
            // Ejecuta la consulta y devuelve un array con todas las 
            // filas resultantes
            $filas = mysqli_query($conexion, $consulta);

            // iterar las filas de la tabla
            while($fila = mysqli_fetch_array($filas)){
                echo "<tr>\n";
                echo "<td> ".$fila['id']." </td>\n";
                echo "<td> ".$fila['nombre']." </td>\n";
                echo "<td> ".$fila['apellido1']." </td>\n";
                echo "<td> ".$fila['apellido2']." </td>\n";
                echo "<td> ".$fila['fecha_nac']. " </td>\n";
                echo "<td> ".$fila['email']. " </td>\n";
                echo "<td><a href='borrado.php?id=".$fila['id']."'>Eliminar</a></td>\n";
                echo "</tr>\n";
                
            }

        ?>     
        </tbody>
    </table>
    <div class="mensaje">
        <?php 
            if (isset($_SESSION['mensaje'])) {
                echo $_SESSION['mensaje'];
                unset($_SESSION['mensaje']);
            }
            ?>
    </div>

</article>

<?php   require_once('plantillas/pie.php'); ?>