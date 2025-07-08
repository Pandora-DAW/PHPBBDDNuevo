<?php   require_once('../plantillas/cabecera.php'); ?>

<article>
    <h2>Listado de asignaturas</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Créditos</th>
                <th>Curso</th>                
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
       
       <?php
            $consulta ="SELECT * FROM asignaturas";
            // Ejecuta la consulta y devuelve un array con todas las 
            // filas resultantes
            $filas = mysqli_query($conexion, $consulta);

            // iterar las filas de la tabla
            while(($fila = mysqli_fetch_array($filas))==true){
                echo "<tr>\n";
                echo "<td> ".$fila['id']." </td>\n";
                echo "<td> ".$fila['nombre']." </td>\n";
                echo "<td> ".$fila['tipo']." </td>\n";
                echo "<td> ".$fila['creditos']." </td>\n";
                echo "<td> ".$fila['curso']. " </td>\n";                
                echo "<td><a href='editar.php?id=".$fila['id']."'>Editar</a></td>\n";
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
    <div class="mensaje">
        <?php 
            if (isset($_SESSION['mensaje'])) {
                echo $_SESSION['mensaje'];
                unset($_SESSION['mensaje']);
            }
            ?>
    </div>

</article>

<?php   require_once('../plantillas/pie.php'); ?>