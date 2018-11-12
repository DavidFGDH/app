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

$subs_numeroC = utf8_decode($_POST['NDP']);

$subs_PrimAp = utf8_decode($_POST['PA']);
$subs_Segap = utf8_decode($_POST['PA2']);
$subs_Nombr = utf8_decode($_POST['NO']);
$subs_email = utf8_decode($_POST['sel2']);



$resultado=mysql_query("SELECT * FROM ".$db_table_name." WHERE Email = '".$subs_email."'", $db_connection);



if (mysql_num_rows($resultado)>0)

{



header('Location: Fail.html');



} else {

	

	$insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`NumCon` , `Primer_Apellido` , `Segundo_Apellido` , `Nombre` , `Sexo`) VALUES ("' . $subs_numeroC . '", "' . $subs_PrimAp . '", "' . $subs_Segap . '","' . $subs_Nombr . '","' . $subs_email . '")';



mysql_select_db($db_name, $db_connection);

$retry_value = mysql_query($insert_value, $db_connection);



if (!$retry_value) {

   die('Error: ' . mysql_error());

}

	

header('Location: Success.html');



}



mysql_close($db_connection);



		

?>
