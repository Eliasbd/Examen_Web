
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
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
    echo'<div class="class bg-primary text-white text-center"><h1>Usuario  registrado</h1></div>';
    echo'<meta http-equiv="refresh"content="5;URL=./log.php">';
}

?>

    
</body>
</html>

