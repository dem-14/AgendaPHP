<?php 

echo "<link rel='StyleSheet' href='estils.css' type='text/css'>";
//Crear la connexió 
$link = mysqli_connect('localhost', 'root', '') or die('No se pudo conectar: ' . mysqli_error()); 
mysqli_select_db($link, 'agenda') or die('No se pudo seleccionar la base de datos'); 
// Realitzar una consulta MySQL 
echo"<h1 class='titulo'>Llistat de Amics</h1>";
echo"<h1> <a class='enlace' href='cercador.php'>Cercador</a></h1>";	
echo "<table border=2 width=400 align=center>";


echo "<tr>";
echo "<th>"; echo "Nom"; echo "</th>"; 
echo "<th>"; echo "Cognoms"; echo "</th>";
echo "<th>"; echo "Telefon"; echo "</th>";
echo "<th>"; echo "Email"; echo "</th>";
echo "</tr>";

$query = 'SELECT * FROM amics'; 
$result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysql_error()); 
while ($linea = mysqli_fetch_array($result)) { 
	echo "<tr>";
	echo "<td>";
	echo "".$linea['nom']."<br/>";
echo "</td>";
echo "<td>";
	echo "".$linea['cognoms']."<br/>";
echo "</td>";
echo "<td>";
	echo "".$linea['telefon']."<br/>";
echo "</td>";
echo "<td>";
	echo "".$linea['email']."<br/>";
echo "</td>";
echo "</tr>";	
} 

//Tancar la connexió 
mysqli_close($link); 

echo "</table>";
?>