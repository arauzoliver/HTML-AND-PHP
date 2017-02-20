<!DOCTYPE html>
<html>
<center>
<header>
<style>
        color: red;
}
h1 {
        color: #00FF00;
}
p {
        color: rgb(0,0,255)
</style>
<h1><p>SOLUCIONES FINANCIERAS</p></h1>
<br>
<img src="logo.jpg" alt="Prueba de inserccion">

</header>
<title>Pestaña</title>

<body>

<h1 style="color:#00FF00;">Titulo principal</h1>


 <form action="index.php" method="POST">
 <table>
  <tr>
    <td>Nombre:</td>
	<td><input id="i_name" name="i_name" type="text"></td>
	<td>Apellido:</td>
	<td><input id="i_apellido" name="i_apellido" type="text"></td>
  </tr>

  <tr>
     <td>Identificacion:</td>
	 <td><input id="i_identificacion" name="i_identificacion" type="text"></td>
     <td>Monto a financiar:</td>
     <td><input id="i_monto" name="i_monto" type="text" /></td> 
  </tr>
  <tr>
     <td>Correo-e</td>
     <td><input id="i_correo" name="i_correo" type="text"></td>
     <td>Tipo:</td>
     <td>
      <select id ="i_tipo" name="i_tipo" >
        <option value="0">-- seleccionar --</option>
	    <option value="1">-- Prestamo Personal --</option>
        <option value="2">-- Prestamo Hipotecario --</option>
	    <option value="3">-- Prestamo de Auto --</option>
	    <option value="4">-- Tarjeta de Credito --</option>
      </select>
	 </td> 
  </tr>   
  <tr>
    <td>Intereses:</td>
	<td><input id="i_intereses" name="i_intereses" type="text" /></td>
    <td>Cuotas:</td>
    <td><input id="i_cuotas" name="i_cuotas" type="text" /></td>
  </tr>
</table> 
  </br>
  <tr>
    <td colspan="3"></td>
    <td><input id="i_btn_calcular" name="i_btn_calcular" type="submit" value="Calcular" /></td>
  </tr>
    </br></br>
<table> 
  <tr>
     <td>Id</td> 
     <td>Apellido</td> 
     <td>Nombre</td> 
     <td>Correo-e</td> 
     <td>Tipo</td> 
     <td>Monto</td> 
     <td>Interes</td> 
     <td>Cuotas</td> 
     <td>Monto Finc</td> 
  </tr>
<?php
$i=0;
while($i<10)  
{
	echo "<tr>";
	echo    "<td>id      " .$i . "</td>";
	echo    "<td>Apellido      " .$i . "</td>";
	echo    "<td>Nombre      " .$i . "</td>";
	echo    "<td>Correo-e      " .$i . "</td>";
	echo    "<td>Tipo      " .$i . "</td>";
	echo    "<td>Monto      " .$i . "</td>";
	echo    "<td>Intereses      " .$i . "</td>";
	echo    "<td>Cuotas      " .$i . "</td>";
	echo    "<td>Monto Finc      " .$i . "</td>";
	echo "</tr>";
	$i++;
};
?>  
</table>
</form> 

<p>This is a paragraph.</p>
<footer>Creado por Oliver Araúz</footer>
</center>
</body>
</html>