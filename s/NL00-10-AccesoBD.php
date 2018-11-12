<!--Programa que se conecta a la base de datos ESCUELA168. En caso de conectarse, manda un mensaje de conexión
    Archivo: NL00-10-AcessoBD.php. Autor: Manuel López Chávez. Fecha: Noviembre 17, 2014  -->
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

   //Si queremos comprobar que existe la conexión, e siguiente código es para este fin
	 if (mysql_connect($servidor,$usuario,$clave))
	   {
		   echo "Mensaje 1. SE ESTABLECIO CONEXION... <br>";
	   }
        else
	   {
		   echo "Mensaje 2. ERROR... de conexión <br>";
	   }

    // Se establece la conexión a la bases de datos
    mysql_select_db($bd,$enlaceBD);

   //Si queremos comprobar que existe la conexión, e siguiente código es para este fin
	 if (mysql_select_db($bd,$enlaceBD))
	   {
		   echo "Mensaje 3. SE ESTABLECIO CONEXION CON LA BASE DE DATOS...$bd <br>";
	   }
        else
	   {
		   echo "Mensaje 4. ERROR... de conexión con la base de datos: escuela168 <br>";
		exit();
	   }
  
    // cerramos la conexion: mysql_close(); 
    mysql_close();
?>
</BODY>
</HTML>