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

<form action = "insertar.php" method = "POST">
<div class="titulo text-center ">
<h1>Registro de Maestros</h1>
</div>

  <div class="form-group  ">
    <label for="exampleInputEmail1">Id</label>
    <input type="Text" class="form-control" id="id"  name="id" aria-describedby="emailHelp" placeholder="Ingrese Su id">   
  </div>

  <div class="form-group  ">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="Text" class="form-control" id="nombre" name="nombre"aria-describedby="emailHelp" placeholder="Ingrese su nombre">   
  </div>

  <div class="form-group ">
    <label for="exampleInputEmail1">Correo</label>
    <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" placeholder="Ingrese Su Correo  ">   
  </div>
  <div class="form-group  ">
    <label for="exampleInputEmail1">Contraseña</label>
    <input type="password" class="form-control" id="contraseña" name="contraseña" aria-describedby="emailHelp" placeholder="Ingrese Su Contraseña">   
  </div>
 <div class="boton text-center">
 <button type="submit" class="btn btn-primary ">Registrarse</button>
 </div>
 <div class="clic">

 <a href="login.php">Ya tengo Una cuenta</a>
 </div>
  
</form>
</div>
    
</body>
</html>