<html>
<head><title>Captura de Datos </title>
<CENTER><h1><font color=black>Centro de Estudios Tengnologico Indusctria y de Servicio No.62</font></h1></CENTER>
<CENTER><h1><font color=green>Registro de alumnos</font></h1></CENTER>
<CENTER><h1><font color=red>Autor:YO</font></h1></CENTER>	
	<div class="cuadrado"><CENTER>Aviso importante</CENTER></div>
<style>
.cuadrado{
padding:5px;
margin:5px;
background-color: #06A209;
border: solid 1px green;
color: white;
}
</style>
	<CENTER><h2>Debe de capturar todos los datos con MAYUSCULA y sin acentos o caracteres especiales</h2></CENTER>
	<CENTER><h3>Todos los campos marcados (*) son obligatorios</h3></CENTER>
<div class="cuadrado2"><CENTER>Informacion Personal</CENTER></div>
<style>
.cuadrado2{
padding:5px;
margin:5px;
background-color: #080ED7;
border: solid 1px blue;
color: white;
}
</style>
</head>
<body>
<FROM ACTION="1.php" METHOD="POST">
	Numero de Control*       : <INPUT TYPR="integer" NAME="NDP" VALUE="" SIZE="15"><br>
	Primer Apellido*         : <INPUT TYPE="text" NAME="PA" VALUE="" SIZE="15">
	Segundo Apellido         : <INPUT TYPE="text" NAME="PA2" VALUE="" SIZE="15"><br>
	Nombres(s)*              : <INPUT TYPE="text" NAME="NO" VALUE="" SIZE="15">
	Sexo:*
             <select id="sel2" name="sel2">
	        <option value="null"></option>
               <option value="12">Hombre</option>
	       <option value="23">Mujer</option>
             </select><br>
		    
	Grupo con Letra         : <INPUT TYPE="text" NAME="GCL" VALUE="" SIZE="15">
	Semestre*:
		<select id="sel3" name="sel3">
			<option value="null"></option>
		  <option value="1">Primero</option>
			<option value="2">Segundo</option>
			<option value="3">Tercero</option>
			<option value="4">Cuarto</option>
			<option value="5">Quinto</option>
			<option value="6">Sexto</option>
		</select><br>
	Carrera*:
             <select id="sel1" name="sel1">
		     <option value="null"></option>
               <option value="11">Tecnico en Programacion</option>
               <option value="22" selected>Tecnico en Ofimatica</option>
               <option value="33">Tecnico en Mecatronica</option>
               <option value="44">Tecnico en Mecanica Industrial</option>
	       <option value="55">Tecnico en Laboratorio Clínico</option>
	       <option value="66">Tecnico en Construcción</option>
             </select><p/>
<div class="cuadrado3"><CENTER>Calificaciones</CENTER></div>
<style>
.cuadrado3{
padding:5px;
margin:5px;
background-color: #080ED7;
border: solid 1px blue;
color: white;
}
</style>
	
Materia 1*:
 <select id="sel5" name="sel5">
	 <option value="null"></option>
              <option value="8">biologia</option>
              <option value="9">Base de datos</option>
              <option value="10">Programa</option>
              <option value="11">Etica</option>
	      <option value="12">Geometria</option>
	      <option value="13">Etica</option>
	</select>
	Parcial 1: <INPUT TYPR="text" NAME="pal1mat1" VALUE="0" SIZE="5">
	Parcial 2: <INPUT TYPR="text" NAME="pal1mat2" VALUE="0" SIZE="5">
	Parcial 3: <INPUT TYPR="text" NAME="pal1mat3" VALUE="0" SIZE="5"><br>
Materia 2*:
 <select id="sel6" name="sel6">
	 <option value="null"></option>
              <option value="100">biologia</option>
              <option value="101">Base de datos</option>
              <option value="102">Programa</option>
              <option value="103">Etica</option>
	      <option value="104">Geometria</option>
	      <option value="104">Etica</option>
	</select>
	Parcial 1: <INPUT TYPR="text" NAME="pal2mat1" VALUE="0" SIZE="5">

	Parcial 2: <INPUT TYPR="text" NAME="pal2mat2" VALUE="0" SIZE="5">

	Parcial 3: <INPUT TYPR="text" NAME="pal2mat3" VALUE="0" SIZE="5"><br>
Materia 3*:
 <select id="sel7" name="sel8">
	 <option value="null"></option>
              <option value="888">biologia</option>
              <option value="999">Base de datos</option>
              <option value="1000">Programa</option>
              <option value="1111">Etica</option>
	      <option value="1222">Geometria</option>
	      <option value="1333">Etica</option>
	</select>
	
	Parcial 1: <INPUT TYPR="text" NAME="pal3mat1" VALUE="0" SIZE="5">

	Parcial 2: <INPUT TYPR="text" NAME="pal3mat2" VALUE="0" SIZE="5">

	Parcial 3: <INPUT TYPR="text" NAME="pal3mat3" VALUE="0" SIZE="5"><br>
Materia 4*:
 <select id="sel9" name="sel9">
	 <option value="null"></option>
              <option value="8">biologia</option>
              <option value="9">Base de datos</option>
              <option value="10">Programa</option>
              <option value="11">Etica</option>
	      <option value="12">Geometria</option>
	      <option value="13">Etica</option>
	</select>
	
	Parcial 1: <INPUT TYPR="text" NAME="pal4mat1" VALUE="0" SIZE="5">

	Parcial 2: <INPUT TYPR="text" NAME="pal4mat2" VALUE="0" SIZE="5">

	Parcial 3: <INPUT TYPR="text" NAME="pal4mat3" VALUE="0" SIZE="5"><br>
Materia 5*:
 <select id="sel10" name="sel10">
	 <option value="null"></option>
              <option value="8">biologia</option>
              <option value="9">Base de datos</option>
              <option value="10">Programa</option>
              <option value="11">Etica</option>
	      <option value="12">Geometria</option>
	      <option value="13">Etica</option>
	</select>
	
	Parcial 1: <INPUT TYPR="text" NAME="pal5mat1" VALUE="0" SIZE="5">

	Parcial 2: <INPUT TYPR="text" NAME="pal5mat2" VALUE="0" SIZE="5">

	Parcial 3: <INPUT TYPR="text" NAME="pal5mat3" VALUE="0" SIZE="5"><br>
Materia 6*:
 <select id="sel11" name="sel11">
	 <option value="null"></option>
              <option value="8">biologia</option>
              <option value="9">Base de datos</option>
              <option value="10">Programa</option>
              <option value="11">Etica</option>
	      <option value="12">Geometria</option>
	      <option value="13">Etica</option>
	</select>
	
	Parcial 1: <INPUT TYPR="text" NAME="pal6mat1" VALUE="0" SIZE="5">

	Parcial 2: <INPUT TYPR="text" NAME="pal6mat2" VALUE="0" SIZE="5">

	Parcial 3: <INPUT TYPR="text" NAME="pal6mat3" VALUE="0" SIZE="5"><br>
	
	

	

	<INPUT TYPE="submit" VALUE="Aceptar">
</FROM>
</body>
<html>
