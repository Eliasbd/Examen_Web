<?php
include 'conexion.php';


$id=$_POST['id'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

$verificar_id=mysqli_QUERY($conexion,"SELECT*FROM teacher WHERE id='$id'");
if(mysqli_num_rows($verificar_id)>0){
    echo'<script>
    alert ("ID YA EXISTE");
    </script>';
  echo'<meta http-equiv="refresh"content="5;URL=./index.php">';
    exit;
    
}

$verificar_correo=mysqli_QUERY($conexion,"SELECT*FROM teacher WHERE correo='$correo'");
if(mysqli_num_rows($verificar_correo)>0){
    echo'<script>
    alert ("CORREO YA EXISTE");
    </script>';
    echo'<meta http-equiv="refresh"content="5;URL=./index.php">';
   exit;
    
}

$insertar = "INSERT  INTO teacher (id, nombre,correo,contra)VALUES('$id','$nombre','$correo','$contraseña')";
$res = mysqli_query($conexion , $insertar);
if(!$res){
    echo'Usuario no se pudo ingresar';
}else{
    echo'Usuerio registrado';
}

?>