<?php

$db_host="dabda-mysqldbserver.mysql.database.azure.com";

$db_user="davidmaster@dabda-mysqldbserver";

$db_password="Redderedes.123";

$db_name="formulario";

$db_table_name="form2";

   $db_connection = mysql_connect($db_host, $db_user, $db_password);



if (!$db_connection) {

	die('No se ha podido conectar a la base de datos');

}

$insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`NumCon` , `Primer_Apellido` , `Segundo_Apellido` , `Nombre` , `Sexo`) VALUES ('{$_POST['NDP']}','{$_POST['PA']}','{$_POST['PA2']}','{$_POST['NO']}','{$_POST['sel2']}')";
$retry_value = mysql_query($insert_value, $db_connection);



if (!$retry_value) {

   die('Error: ' . mysql_error());

}

	

header('Location: Success.html');



}



mysql_close($db_connection);



		

?>
