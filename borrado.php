<?php 
require_once('config.php');

if (!$_GET['id']) {
    header('Location: listado.php');
}

// Define una variable de sesión llamada mensaje para enviar datos 
// a otr página
$_SESSION['mensaje']="";


// recogemos el id del alumno a eliminar
$id = $_GET['id'];

$consulta="DELETE FROM alumnos WHERE id=$id";

$resultado = mysqli_query($conexion, $consulta);
$numFilas=mysqli_affected_rows($conexion);
if ($numFilas==1) {
    $_SESSION["mensaje"]="Alumno borrado correctamente. Se ha borrado $numFilas filas";
} else {
    $_SESSION["mensaje"]= "Error. No se ha podido borrar.";
}

header("Location:listado.php");

?>