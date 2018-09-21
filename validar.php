<?php



$correo = $_POST['l-correo'];
$contra = $_POST['l-contraseña'];

$conexion = mysqli_connect("localhost", "root", "" ,"bdregistros");
$consultar = "SELECT * FROM teacher WHERE  correo = '$correo' and contra = '$contra'";
$resultado = mysqli_query($conexion , $consultar);

$filas = mysqli_num_rows($resultado);

if($filas>0){
    header("Location:registronotas.php");
}else{
    echo  "error en la autentificacion";
}

mysqli_free_result($resultado);
mysqli_close($conexion);



?>