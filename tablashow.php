<?php

        class conexion{
           function recuperar(){
           /* $host = "localhost";
            $user = "root";
            $pw = "";
            $db = "bdregistros";
 
            $con = mysqli_connect($host, $user, $pw, $db);
 
             mysqli_select_db($db, $con);*/
             $conexion = mysqli_connect("localhost", "root", "", "bdregistros");
             $query = "SELECT * FROM alumnos";

             $rs = mysqli_query($query, $conexion);


             while($fila = mysql_fetch_array($rs)){
                 echo"$fila [id] <br>";
                 echo"$fila [nombre] <br>";
                 echo"$fila [asignatura] <br>";
                 echo"$fila [lp] <br>";
                 echo"$fila [llp] <br>";
                 echo"$fila [lllp] <br>";
                 echo"$fila [lvp] <br>";
                 echo"$fila [promedio] <br>";
             }
           }


        }

?>