<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Agregar Cuartelero</title>
	<meta name ="viewport" content="width=device-width,initial-scale=1"/>
	<link rel="stylesheet" href="stylo.css" /> </head>

<?php
$host="localhost";
$usuario="root";
$password="root";
$conectar=mysql_connect($host, $usuario, $password);
mysql_select_db("universidad",$conectar);

if(isset($_POST["submit"])){
$btn=$_POST["submit"];
if($btn=="Agregar")
	{
	$codigo=$_POST['codigo'];
	$nombre=$_POST['nombre'];
	$paterno=$_POST['paterno'];
	$materno=$_POST['materno'];
	$nacimiento=$_POST['nacimiento'];
	
$comp_us=mysql_query("SELECT codigo FROM alumnos WHERE codigo='$codigo' ");
$array_comp_us= mysql_fetch_array($comp_us);
if($array_comp_us==true){ echo "<script>alert('ERROR!! El codigo ya existe.')</script>"; }

if($array_comp_us==false){
$c=("INSERT INTO alumnos (Codigo, Nombre, Apellido_P, Apellido_M, Fecha_Naci) VALUES ('$codigo', '$nombre', '$paterno', '$materno', '$nacimiento')");
echo "<script>alert('FELICIDADES!! El usuario se registro exitosamente.')</script>";
mysql_query($c,$conectar); 
//echo $c;
}

}
}

?>
<style type="text/css">
<!--
.Estilo2 {color: #000000}
.Estilo3 {
	font-size: 12px;
	color: #000000;
}
-->
</style>
<body>
<header>
  <h4>&nbsp;</h4>
	

	<nav>	</nav>
</header>
	

<section id="contenido">
			<section id="admin">
				<h3>Formato Unico De Afilicion Y Actualizacion Al Registro Partidario</h3><br>
				<h4>Agregar Afiliacion</h4>
				<article id="contactanos">
				<form action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data"  method="POST" name="CUARTELERO">
				<fieldset>		
	  			<table>
                <tr>
                <td width="363" scope="col"><div align="left" class="Estilo1 Estilo2">Tipo Actualizacion :</div>
                  <option value=" ">  </option>
               	  <option value="actualizacion"></option></td>
                          <td width="340"  scope="col"><div align="left" class="Estilo1 Estilo2">Codigo:</div>
                              <input  width="230"id="caja" name="codigo" type="text" class="fade" / >                          </td>
                          <td width="340"  scope="col"><div align="left" class="Estilo1 Estilo2">Nombre:</div>
                              <input width="230" id="caja" name="nombre" type="text" class="fade" />                          </td>
                        <tr>
                          <td width="363"  scope="col"><div align="left" class="Estilo2">Apellido Paterno:</div>
                              <input width="340" id="caja" name="paterno" type="text"  class="fade"  />                          </td>
                          <td width"340" scope="col"></td>
                          <td width"304" scope="col">&nbsp;</td>
                        <tr>
                          <td height="74""363" scope="col" widht><div align="left" class="Estilo2">Apellido Mateno:</div>
                              <input width="340" id="caja" name="materno" type="text"  class="fade"  / >                          </td>
                          <td widht"340" scope="col"><div align="left" class="Estilo1 Estilo2">Fecha de Nacimiento :</div>
                              <input width="230" id="caja" name="nacimiento" type="text"  class="fade"  />                          </td>
						  
                          <td widht"304" scope="col"><div align="left" class="Estilo1 Estilo2"></div>                          </td>
                                              </table>
  				<p></p>
				<p></p>
				<p></p>
						    <p></p>
						      <div align="center" > <input name="submit" type="submit" value="Agregar"/></div>
				     		  <div align="center" > <a href="consulta.php" target="_blank" >Consulta</a></div>
                  </fieldset>
		        </form>
			  </article>
			</section>
</section>
<footer>
 <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
</footer>
</body>
</html>
