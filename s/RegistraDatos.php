<!--Programa que se conecta a la base de datos ESCUELA168 e inserta registros en las tablas ALUMNOS y CALIFICACIONES 
    Archivo: RegistraDatos.php. Autor: Manuel López Chávez. Fecha: Noviembre 17, 2014  -->
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
   $tabla1  = "alumnos";
   $tabla2  = "calificaciones";

   // Se establece la conexión al servidor de bases de datos
   $enlaceBD = mysql_connect($servidor,$usuario,$clave);

   // Se establece la conexión a la bases de datos
   mysql_select_db($bd,$enlaceBD);

   // Se inserta 1 registro en la tabla ALUMNOS
   $insertar = "INSERT INTO alumnos (ncontrol,apellido1,apellido2,nombre,sexo,grupo,semestre,carrera) 
    VALUES ('{$_POST['numcontrol']}','{$_POST['ap1']}','{$_POST['ap2']}','{$_POST['nombre']}','{$_POST['sexo']}','{$_POST['gpo']}',
            '{$_POST['sem']}','{$_POST['carr']}')";
   mysql_query($insertar,$enlaceBD) or die ("Error al registrar datos en la base de datos...");

   // Se inserta PRIMER registro en la tabla CALIFICACIONES de la materia 1
   $insertar = "INSERT INTO calificaciones (ncontrol,materia,parcial1,parcial2,parcial3) 
    VALUES ('{$_POST['numcontrol']}','{$_POST['mat1']}','{$_POST['m1p1']}','{$_POST['m1p2']}','{$_POST['m1p3']}')";
   mysql_query($insertar,$enlaceBD) or die ("Error al registrar datos en la base de datos...");

   // Se inserta SEGUNDO registro en la tabla CALIFICACIONES de la materia 2
   $insertar = "INSERT INTO calificaciones (ncontrol,materia,parcial1,parcial2,parcial3) 
    VALUES ('{$_POST['numcontrol']}','{$_POST['mat2']}','{$_POST['m2p1']}','{$_POST['m2p2']}','{$_POST['m2p3']}')";
   mysql_query($insertar,$enlaceBD) or die ("Error al registrar datos en la base de datos...");

   // Se inserta TERCER registro en la tabla CALIFICACIONES de la materia 3
   $insertar = "INSERT INTO calificaciones (ncontrol,materia,parcial1,parcial2,parcial3) 
    VALUES ('{$_POST['numcontrol']}','{$_POST['mat3']}','{$_POST['m3p1']}','{$_POST['m3p2']}','{$_POST['m3p3']}')";
   mysql_query($insertar,$enlaceBD) or die ("Error al registrar datos en la base de datos...");

   // Se inserta CUARTO registro en la tabla CALIFICACIONES de la materia 4
   $insertar = "INSERT INTO calificaciones (ncontrol,materia,parcial1,parcial2,parcial3) 
    VALUES ('{$_POST['numcontrol']}','{$_POST['mat4']}','{$_POST['m4p1']}','{$_POST['m4p2']}','{$_POST['m4p3']}')";
   mysql_query($insertar,$enlaceBD) or die ("Error al registrar datos en la base de datos...");

   // Se inserta QUINTO registro en la tabla CALIFICACIONES de la materia 5
   $insertar = "INSERT INTO calificaciones (ncontrol,materia,parcial1,parcial2,parcial3) 
    VALUES ('{$_POST['numcontrol']}','{$_POST['mat5']}','{$_POST['m5p1']}','{$_POST['m5p2']}','{$_POST['m5p3']}')";
   mysql_query($insertar,$enlaceBD) or die ("Error al registrar datos en la base de datos...");

   // Se inserta SEXTO registro en la tabla CALIFICACIONES de la materia 6
   $insertar = "INSERT INTO calificaciones (ncontrol,materia,parcial1,parcial2,parcial3) 
    VALUES ('{$_POST['numcontrol']}','{$_POST['mat6']}','{$_POST['m6p1']}','{$_POST['m6p2']}','{$_POST['m6p3']}')";
   mysql_query($insertar,$enlaceBD) or die ("Error al registrar datos en la base de datos...");

   // cerramos la conexion: mysql_close(); 
   mysql_close();

   include("Aviso.php");

?>
</BODY>
</HTML>