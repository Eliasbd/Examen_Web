<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
        
<?php

include 'conexion.php';

$nombre=$_POST['nombre'];
$asignatura=$_POST['asignatura'];
$ip=$_POST['ip'];
$iip=$_POST['iip'];
$iiip=$_POST['ip'];
$ivp=$_POST['iip'];



$prom=$_POST['prom'];

$insertar = "INSERT  INTO alumnos ( nombre,asignatura,lp , llp , lllp , lvp , promedio)VALUES('$nombre','$asignatura','$ip','$iip',  '$iiip' , '$ivp', '$prom' )";
$res = mysqli_query($conexion , $insertar);
if(!$res){
    echo'Usuario no se pudo ingresar';
}else{
    echo'<div class="class bg-primary text-white text-center"><h1>ALumno  registrado</h1></div>';
    echo'<meta http-equiv="refresh"content="5;URL=./log.php">';
}




    
?>

<?php

class suma{
    public function suma(){
        $conec = new conexion ("localhost", "root", "" , "agendatelefonica");
              
$ip=$_POST['ip'];
$iip=$_POST['iip'];
$iiip=$_POST['ip'];
$ivp=$_POST['iip'];


  $promedio = (($ip + $iip +$iiip + $ivp) / 4);
        if($primer && $segundo  && $tercer && $cuarto){
          echo "$promedio";
        }
    }


}



?>
</body>
</html>

