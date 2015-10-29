<?php
$server="192.168.2.9\SQL2012";
$database="ASFC_PRUEBAS";
$user="asfcsistema";
$password="asfc2015";
$conn=odbc_connect("Driver={SQL Server Native Client 11.0};Server=$server;Database=$database;", $user, $password);
if(!$conn )
{
     exit ("Fallo la Conexion: " . $conn);
}
$sql="SELECT FECHA_INICIO AS FECHA,DESCRIPCION_LARGA AS CICLOO FROM CAT_CICLO_ESCOLAR";
$rs=odbc_exec($conn,$sql);
if (!$rs)
{
	exit("Error al ejecutar la Consulta");
}
echo "<table><tr>";
echo "<th>FECHA INICIO</th>";
echo "<th>DESCRIPCION LARGA</th>";
while (odbc_fetch_row($rs))
{
	$fecha_ini=odbc_result($rs,"FECHA_INICIO");
	$desc=odbc_result($rs,"DESCRIPCION_LARGA");
	echo "<tr><td>$fecha_ini</td>";
	echo "<td>$desc</td></tr>";
}
echo "</table>";
odbc_close($conn);
?>