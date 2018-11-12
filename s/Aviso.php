<!-- Plantilla de Aviso.php que muestra el mensaje cuando fué exitoso el registro de los datos -->
<HTML>
<HEAD><TITLE>Acceso a Bases de Datos</TITLE></HEAD>
<BODY>
<?php

  echo "<table width='800' border='0' class='borde'>";
  echo "  <tr>";
  echo "    <td><img src='Imagenes/LogoSEP.jpeg' width='80' height='70' border='0'> </td>";
  echo "    <td align='center'>";
  echo "      <b>Centro de Bachillerato Tecnol&oacute;gico industrial y de servicios No. 168<br></b>";
  echo "      <b><FONT COLOR=#296733>REGISTRO DE DATOS DE ALUMNOS</b><BR></FONT>";
  echo "      <b><FONT COLOR=#3E709F>Autor: M.C. Manuel L&oacute;pez Ch&aacute;vez, Noviembre 2014</b></FONT>";
  echo "    </td>";
  echo "    <td><img src='Imagenes/DGETI.gif' width='55' height='60' border='0'> </td>";
  echo "  </tr>";
  echo "</table>";

  echo "<table width='800' border='0'>";
  echo "  <tr>";
  echo "  <td bgcolor='#DF0101' align='center'><FONT face=Arial size=3 COLOR='white'>";
  echo "      <b>A V I S O  &nbsp;&nbsp;&nbsp;  I M P O R T A N T E . . .  !<BR></b><FONT COLOR='dark'></font>";
  echo "  </td>";
  echo "  </tr>";
  echo "  <tr>";
  echo "  <td bgcolor='#F7F899' align='center'><FONT face=Arial size=3 COLOR='black'>";
  echo "     <br><b>EL REGISTRO DE LOS DATOS FUE EXITOSO....</b><BR><BR>";
  echo "     Si deseas registrar m&aacute;s datos, da <b>clic</b> en el bot&oacute;n, o simplemente cierra la ventana activa del navegador <BR><BR></font>";
  echo "  </td>";
  echo "  </tr>";
  echo "</table>";
  
  echo "<br>";
  echo"<table width='800' border='0' class='borde' bgcolor='#D8D8D8'>";
  echo "<tr>";
  echo "<td align='center'><a href='NL00-P13-Alumnos2.html'><input type='button' value='REGISTRAR MAS DATOS...' name='submit'></a></td>";
  echo "</tr>";
  echo "</table>";

?>

</BODY>
</HTML>