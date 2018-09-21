<?php
      
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Registro de Notas</title>
    <script type="text/javascript">
      
     function sumar(){
      var num = document.f1.ip.value;
      var n2 = document.f1.iip.value;
      var n3 = document.f1.iiip.value;
      var n4 = document.f1.ivp.value;

     
    
      var res = (parseInt(num) + parseInt(n2)+ parseInt(n3)+ parseInt(n4))/4;

document.f1.prom.value = res;



     
     }
         

  </script>
  
 
</head>
<body class="bg-secondary  p-5 "> 
        <form class="p-4  bg-light rounded" >
        <a href="log.php" class="btn btn-danger mb-2">Salir</a>
        <a href="tabla.php" class="btn btn-info mb-2">Mostrar Alumnos</a>
        <div class=" text-center h5">
        <img src="img/logo.png ">
       
     <caption>INSTITUTO EVANGÉLICO HOSANNA</caption>
     
     <br>
     <caption >BOLETAS DE CALIFICACIONES</caption>
     
     <br>
     <caption >AÑO 2018</caption>
     
     
    </form> 
<form action = "alum.php" method = "POST" name = "f1">

    <p>DATOS DEL (DE LA) ALUMNO (A)</p>
    <br>
    <input type="text" class="form-control" name = "nombre" id="name" aria-describedby="emailHelp" placeholder="Ingrese el nombre completo del alumno"  required >
    <br>
    <p>DATOS DE LA INSTITUCION</p>
    <a href="#">Jardin,Escuela e Instituto Hosanna</a>
    <small id="emailHelp" class="form-text text-muted">Nombre de la Institucion </small> 
    <a href="#">El Marañon, Villanueva,Cortes</a>
    <small id="emailHelp" class="form-text text-muted ">Direccion</small> 

    
    <br>
  <div class="form-group ">
    
    <br>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Asignaturas</th>
      <th scope="col">I Bimestre</th>
      <th scope="col">II Bimestre</th>
      <th scope="col">III Bimestre</th>
      <th scope="col">IV Bimestre</th>
      <th scope="col">Promedio</th>
    </tr>
  </thead>
  <tbody id="tbody">

   
    <div class="agregar1" id="agregar">

    <tr id="fila" class="selected">
      <th ><input type="text" name="asignatura" id="asignatura-0"  required ></th>
      <td><input type="text" name="ip"id="IP-0" OnKeyUp = "sumar()"  required></td>
      <td><input type="text" name="iip" class="w-100" id="IIP-0" OnKeyUp = "sumar()"  required></td>
      <td><input type="text" name="iiip" class="w-100" id="IIIP-0" OnKeyUp = "sumar()"  required></td>
      <td><input type="text" name="ivp" class="w-100" id="IVP-0" OnKeyUp = "sumar() "  required></td>
      <td><input type="text" name="prom" class="w-100" id="promedio-0"  required >
      </td>
    </tr>

    
    </div>
  </tbody>
 
</table>

<button  class="btn btn-primary mb-2 row" id = "plus" onclick = "call()">Mas</button>


  <div class="form-group row ">
    <label for="exampleInputEmail1">INASISTENCIAS</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    <small id="emailHelp" class="form-text text-muted">Marcar si el aprendizaje y/o la promocion
    de grado del(de la) alumno(a) se encuentra(n) en Riesgo </small> 


<div class="form-check form-check-inline">

  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">Alerta</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">Alerta</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"  >
  <label class="form-check-label" for="inlineCheckbox3">Alerta</label>
</div>

    <div class="form-group">
    <label for="exampleFormControlSelect1">Total Inasistencias</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
    </select>
  </div>
  </div>
  <form class="container">
  
  
 <!-- <button type="submit" class="btn btn-primary">PROMEDIO FINAL DE GRADO</button> -->
<br>
  <div class="form-group row">
    <label for="exampleFormControlTextarea1">OBSERVACIONES</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <form class="form-inline">
  <label class="sr-only" for="inlineFormInputName2">TUTORIA</label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="TUTORIA">

  <label class="sr-only" for="inlineFormInputGroupUsername2">ASISTIR</label>
  <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      
    </div>
    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="ASISTIR">
  </div>

 
  <button type="submit" class="btn btn-primary mb-2">Enviar</button>
</form>
    </form>
 </form>


</body>
</html>



 <script src="js/jquery-3.3.1.slim.min"></script>
 <script src="js/js.js"></script>
