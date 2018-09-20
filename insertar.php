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
    echo'Usuerio registrado';
}

?>