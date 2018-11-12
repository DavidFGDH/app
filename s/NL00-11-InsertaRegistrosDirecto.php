<!--Programa que se conecta a la base de datos ESCUELA168 e inserta registros en las tablas ALUMNOS y CALIFICACIONES 
    Archivo: NL00-11-InsertaRegistrosDirecto.php. Autor: Manuel López Chávez. Fecha: Noviembre 17, 2014  -->
<HTML>
<HEAD><TITLE>Acceso a Bases de Datos</TITLE></HEAD>
<BODY>
<?PHP

   // Se establecen las variables para la conexión a las bases de datos
   $servidor = "localhost";
   $usuario  = "root";
   $clave    = "";

   // Se establecen las variables de la base de datos y tabla(s) para la conexión
   $bd     = "escuela168";
   $tabla  = "alumnos";

   // Se establece la conexión al servidor de bases de datos
   $enlaceBD = mysql_connect($servidor,$usuario,$clave);

   // Se establece la conexión a la bases de datos
   mysql_select_db($bd,$enlaceBD);

   // Se inserta 1 registro en la tabla ALUMNOS
   $insertar = "INSERT INTO alumnos (ncontrol,apellido1,apellido2,nombre,sexo,grupo,semestre,carrera) 
    VALUES ('16800000000001','LOPEZ','CHAVEZ','MANUEL','Hombre','E','Tercero','PROGRAMACION')";
   mysql_query($insertar,$enlaceBD) or die ("Error...");

   // Se inserta PRIMER registro en la tabla CALIFICACIONES de la materia 1
   $insertar = "INSERT INTO calificaciones (ncontrol,materia,parcial1,parcial2,parcial3) 
    VALUES ('16800000000001','BIOLOGIA','10','9','9')";
   mysql_query($insertar,$enlaceBD) or die ("Error...");

   // Se inserta SEGUNDO registro en la tabla CALIFICACIONES de la materia 2
   $insertar = "INSERT INTO calificaciones (ncontrol,materia,parcial1,parcial2,parcial3) 
    VALUES ('16800000000001','DESARROLLA SOFTWARE DE APLICACION','8','9','10')";
   mysql_query($insertar,$enlaceBD) or die ("Error...");

   // Se inserta TERCER registro en la tabla CALIFICACIONES de la materia 3
   $insertar = "INSERT INTO calificaciones (ncontrol,materia,parcial1,parcial2,parcial3) 
    VALUES ('16800000000001','DISEÑA Y ADMINISTRA BD','10','8','7')";
   mysql_query($insertar,$enlaceBD) or die ("Error...");

   // Se inserta CUARTO registro en la tabla CALIFICACIONES de la materia 4
   $insertar = "INSERT INTO calificaciones (ncontrol,materia,parcial1,parcial2,parcial3) 
    VALUES ('16800000000001','ETICA','9','8','8')";
   mysql_query($insertar,$enlaceBD) or die ("Error...");

   // Se inserta QUINTO registro en la tabla CALIFICACIONES de la materia 5
   $insertar = "INSERT INTO calificaciones (ncontrol,materia,parcial1,parcial2,parcial3) 
    VALUES ('16800000000001','GEOMETRIA ANALITICA','10','10','10')";
   mysql_query($insertar,$enlaceBD) or die ("Error...");

   // Se inserta SEXTO registro en la tabla CALIFICACIONES de la materia 6
   $insertar = "INSERT INTO calificaciones (ncontrol,materia,parcial1,parcial2,parcial3) 
    VALUES ('16800000000001','INGLES III','9','6','9')";
   mysql_query($insertar,$enlaceBD) or die ("Error...");

   // cerramos la conexion: mysql_close(); 
   mysql_close();

   echo "<h1>REGISTROS DADOS DE ALTA...</h1>";

?>
</BODY>
</HTML>