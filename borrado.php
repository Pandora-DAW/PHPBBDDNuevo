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
if ($resultado>0) {
    $_SESSION["mensaje"]="Alumno borrado correctamente".$resultado.$consulta;
} else {
    $_SESSION["mensaje"]= "Error. No se ha podido borrar.".$resultado;
}

header("Location:listado.php");

?>