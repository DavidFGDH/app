<!--Programa que se conecta a la base de datos ESCUELA168 e inserta registros en la tabla ALUMNOSCALIF 
    Archivo: BuscaCalif.php. Autor: Manuel López Chávez. Fecha: Noviembre 17, 2014  -->
<html>
<head>
  <title>CBTis 168: Consulta de Calificaciones</title>
</head>
<body>
<?php

   // Se establecen las variables para la conexión a las bases de datos
   $servidor = "localhost";
   $usuario  = "root";
   $clave    = "";

   // Se establecen las variables de la base de datos y tabla(s) para la conexión
   $bd     = "escuela168";
   $tabla1  = "alumnos";
   $tabla2  = "calificaciones";

   // Se establece la conexión al servidor de bases de datos
   $enlaceBD = mysql_connect($servidor,$usuario,$clave);

   // Se establece la conexión a la bases de datos
   mysql_select_db($bd,$enlaceBD);
   $registros=mysql_query("select ncontrol,nombre,apellido1,apellido2,semestre,grupo,carrera
     from $tabla1 where ncontrol='$_REQUEST[NumControl]'",$enlaceBD) or die("Problemas en el select:".mysql_error());

   if ($reg=mysql_fetch_array($registros))
   {
     echo "<table align=center border=0>";
     echo "<td>";
     echo "<font face=Arial size=3><b>NUMERO DE CONTROL:</b> ".$reg['ncontrol']."</font><br>";
     echo "<font face=Arial size=3><b>NOMBRE:</b> ".$reg['nombre']." </font>";
     echo "<font face=Arial size=3> ".$reg['apellido1']." </font>";
     echo "<font face=Arial size=3> ".$reg['apellido2']."</font><br>";
     echo "<font face=Arial size=3><b>SEMESTRE:</b> ".$reg['semestre']."</font><br>";
     echo "<font face=Arial size=3><b>GRUPO:</b> ".$reg['grupo']."</font><br>";
     echo "<font face=Arial size=3><b>CARRERA:</b> ".$reg['carrera']."</font><br>";
     echo "</td>";     
     echo "</table>";
   }
   else
   {
     echo "<center><h2>No existe un alumno con ese Número de Control</h2></center>";
     exit();
   }

   $resultado= mysql_query("SELECT Materia,Parcial1,Parcial2,Parcial3
      FROM $tabla2 where ncontrol='$_REQUEST[NumControl]'",$enlaceBD);

   # CREAMOS UNA CABECERA DE UNA TABLA (codigo HTML)
   echo "<table align=center border=3>";

   # CREAMOS LOS TITULOS DE CADA CELDA
   echo "<td align=center bgcolor='#E3F6CE'><font face=Arial size=2><b>MATERIA</b></font></td>";
   echo "<td align=center bgcolor='#E3F6CE'><font face=Arial size=2><b>Parcial 1</b></font></td>";
   echo "<td align=center bgcolor='#E3F6CE'><font face=Arial size=2><b>Parcial 2</b></font></td>";
   echo "<td align=center bgcolor='#E3F6CE'><font face=Arial size=2><b>Parcial 3</b></font></td>";

   # establecemos un bucle que recoge en un array cada una de las LINEAS DEL RESULTADO DE LA CONSULTA
   # utilizamos en esta ocasión «mysql_fetch_row» en vez de «mysql_fetch_array» para EVITAR DUPLICADOS
   # Recuerda que esta ultima función devuelve un array escalar y otro asociativo con los resultados

   while ($registro = mysql_fetch_row($resultado)){
       # insertamos un salto de línea en la tabla HTML
       echo "<tr>";
       # establecemos el bucle de lectura del ARRAY con los resultados de cada LINEA y encerramos
       # cada valor en etiquetas <td></td> para que aparezcan en celdas distintas de la tabla
       foreach($registro  as $clave){
          echo "<td align=center><font face=Arial size=2><b>",$clave,"</b></font></td>";
       }
   }
   echo "</table>";

 # cerramos la conexion
 mysql_close(); 
?>
</body>
</html>