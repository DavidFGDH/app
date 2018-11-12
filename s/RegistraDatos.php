<!--Programa que se conecta a la base de datos ESCUELA168 e inserta registros en las tablas ALUMNOS y CALIFICACIONES 
    Archivo: RegistraDatos.php. Autor: Manuel López Chávez. Fecha: Noviembre 17, 2014  -->
<HTML>
<HEAD><TITLE>Acceso a Bases de Datos</TITLE></HEAD>
<BODY>
<?PHP

   // Se establecen las variables para la conexión a las bases de datos
   $servidor = "dabda-mysqldbserver.mysql.database.azure.com";
   $usuario  = "davidmaster@dabda-mysqldbserver";
   $clave    = "Redderedes.123";

   // Se establecen las variables de la base de datos y tabla(s) para la conexión
   $bd     = "formulario";
   $tabla1  = "form2";
   $tabla2  = "calificaciones";

   // Se establece la conexión al servidor de bases de datos
   $enlaceBD = mysql_connect($servidor,$usuario,$clave);

   // Se establece la conexión a la bases de datos
   mysql_select_db($bd,$enlaceBD);

   // Se inserta 1 registro en la tabla ALUMNOS
   $insertar = "INSERT INTO form2 (ncontrol,apellido1,apellido2,nombre,sexo,grupo,semestre,carrera) 
    VALUES ('{$_POST['numcontrol']}','{$_POST['ap1']}','{$_POST['ap2']}','{$_POST['nombre']}','{$_POST['sexo']}')";
   mysql_query($insertar,$enlaceBD) or die ("Error al registrar datos en la base de datos...");


   // cerramos la conexion: mysql_close(); 
   mysql_close();

   include("Aviso.php");

?>
</BODY>
</HTML>
