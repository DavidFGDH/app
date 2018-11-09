<HTML>
<BODY>
<?PHP
	$Num1 = $_REQUEST['Num1'];
	$Num2 = $_REQUEST['Num2'];

	print ("<UL\n>");
	print ("	<LI>Primer n&uacute;mero: &Num1\n");
	print ("	<LI>Segundo n&uacute;mero: $Num2\n");
	print ("<UL\n>");

	if ($Num1 > $Num2){
		echo "<p><b>El primer n&uacute;mero es mayor </b></p>"
	}
	else {
		if ($Num1 == $Num2){
			echo "<p><b> El segundo numero n&uacute;meros son iguales </b></p>"
		}
		else{
			echo "<p><b> El segundo n&uacute;mero es mayor </b></p>"
		}
	}
?>
<BR><BR>
<A HREF='NL00-P6-NumeroMayot.php'><b> Nuevo c&aacute;1culo de n&uacute,meros...</b></A>
</BODY>
</HTML>
