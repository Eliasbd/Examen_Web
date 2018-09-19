<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
    <title>Document</title>
</head>
<body>
<?php
include 'conexion.php';


$id=$_POST['id'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

$insertar = "INSERT  INTO teacher (id, nombre,correo,contra)VALUES('$id','$nombre','$correo','$contraseña')";
$res = mysqli_query($conexion , $insertar);
if(!$res){
    echo'Usuario no se pudo ingresar';
}else{
    echo'<div class="mensaje text-light bg-dark text-center">
   <h1 class="bg-primary"> Usuario registrado</h1>
   <a class="btn btn-primary" href="login.php">Iniciar Sesion</a>
   </div>';
}
?>
    
</body>
</html>