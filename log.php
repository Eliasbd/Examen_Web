<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body class="p-4">

<div class="container border border-primary p-4 w-50">

<form action = "validar.php" method = "POST">
<div class="titulo text-center ">
<h1>Iniciar Sesion</h1>
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Correo Electronico</label>
    <input type="email" class="form-control" name="l-correo" id="correo" placeholder="Ingrese su Correo Electronico">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" name="l-contraseña" id="contraseña" placeholder="Ingrese su Contraseña">
  </div>
  
 <div class="boton text-center">
 <button type="submit" class="btn btn-primary ">Registrarse</button>
 </div>
 <div class="clic">

 <a href="index.php">Regresar</a>
 </div>
  
</form>
</div>
    
</body>
</html>