<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alumnos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

        <div class="container">
        <a href="registronotas.php" class="btn btn-primary mb-2">Regresar</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Asignatura</th>
                            <th scope="col">IP</th>
                            <th scope="col">IIP</th>
                            <th scope="col">IIIP</th>
                            <th scope="col">IVP</th>
                            <th scope="col">Promedio</th>
                         </tr>
                    </thead>
                    <tbody>
                        
                            <?php
                                                /*include("tablashow.php");
                                                $Con = new conexion();
                                                $Con->recuperar();*/

                                                include ("conexion.php");
                                              
                                     
                                               

                                                $insertar = "SELECT * FROM alumnos";

                                                $res = mysqli_query($conexion , $insertar);

                                                while($rd = mysqli_fetch_array($res)){
                                                    echo"<tr>"."<td>".$rd['id']."</td>"
                                                    ."<td>".$rd['nombre']."</td>"
                                                    ."<td>".$rd['asignatura']."</td>"
                                                    ."<td>".$rd['lp']."</td>"
                                                    ."<td>".$rd['llp']."</td>"
                                                    ."<td>".$rd['lllp']."</td>"
                                                    ."<td>".$rd['lvp']."</td>"
                                                    ."<td>".$rd['promedio']."</td>"
                                                    ."</tr>";
                                                }

                                                
                            ?>
                        
                    </tbody>
                </table>
        
        
        </div>
    
</body>
</html>