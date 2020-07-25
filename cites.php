<?php
global $result_id_amic;
$nombre=$_POST['nombre'];
//$nombre = urldecode($_POST["nombre"]);

echo "<link rel='StyleSheet' href='estils.css' type='text/css'>";
//Crear la connexió 

$link = mysqli_connect('localhost', 'root', '') or die('No se pudo conectar: ' . mysqli_error()); 
mysqli_select_db($link, 'agenda') or die('No se pudo seleccionar la base de datos'); 
// Realitzar una consulta MySQL 
$query = 'SELECT id_amic, nom FROM amics';
$result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysql_error());

while ($linea = mysqli_fetch_array($result)) { 
	
	if($nombre==$linea['nom']){
		$result_id_amic=$linea['id_amic'];
		
	}
}

//Tancar la connexió 
mysqli_close($link);


echo "<h1 class='titulo'> Cites: ".$nombre."</h1>";
//Crear la connexió 

$link = mysqli_connect('localhost', 'root', '') or die('No se pudo conectar: ' . mysqli_error()); 
mysqli_select_db($link, 'agenda') or die('No se pudo seleccionar la base de datos'); 
// Realitzar una consulta MySQL 
$query = 'SELECT * FROM cites ORDER BY data';
$result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysql_error());

echo"<table border=2 width=300 align=center>";
echo"<tr>";
echo"<th>Lloc</th>";
echo"<th>Data</th>";
echo"<th>Hora</th>";
echo"<th>Descripcío</th>";
echo"</tr>";
while ($linea = mysqli_fetch_array($result)) {
	if( $linea['id_amic']==$result_id_amic){
		
		echo"<tr>";
		echo"<td>";
		echo "".$linea['lloc']."<br/>";
		echo"</td>";
		echo"<td>";
		echo "".$linea['data']."<br/>";
		echo"</td>";
		echo"<td>";
		echo "".$linea['hora']."<br/>";
		echo"</td>";
		echo"<td>";
		echo "".$linea['descripcio']."<br/>";
		echo"</td>";
		echo"</tr>";
		
	}
}
	echo"</table>";
	
//Tancar la connexió 
mysqli_close($link);

	?>