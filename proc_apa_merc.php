<?php
	include 'php/database.php';
	?>
	
<?php
 
// create a variable
 $cod_merc=$_GET['cod_merc'];
//Execute the query
 
mysqli_query($connect,"DELETE FROM mercadoria WHERE mercadoria.cod_merc='".$cod_merc."'");

if(mysqli_affected_rows($connect) > 0){
	echo "<p>Mercadoria Apagada</p>";
	echo "<p><a href='index.php'>Voltar</a></p>"; 
} else {
	echo "Erro ao Apagar<br />";
	echo mysqli_error ($connect);
}
?>