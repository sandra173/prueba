<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consulta</title>
</head>

<body>

<?php 
echo "A CONTINUACION SE MUESTRA EL RESULTADO DE SELECCIONAR TODOS LOS REGISTROS";
$host="localhost";
$usuario="adminM8USkvC";
$password="sGNE8g83ztdl";
$conectar=mysql_connect($host, $usuario, $password);
mysql_select_db("votacion",$conectar);

$consulta="SELECT fullname, id, email, username, password FROM user";
$query=mysql_query($consulta, $conectar);

echo "<table border=1 bgcolor=white>";
while($reg=mysql_fetch_row($query))
{
echo"<tr>";
echo"<br>";
foreach($reg as $cambia){
echo"<td>",$cambia,"</td>";
}
}
echo"</table>";

?>
 

</body>
</html>
