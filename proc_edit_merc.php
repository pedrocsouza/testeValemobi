<?php
	include 'php/database.php';
	?>
	
<?php
 
// create a variable
$tiponegoc=$_POST['tipo_neg'];
$nome=$_POST['nome_merc'];
$tipomerc=$_POST['tipo_merc'];
$preco=$_POST['preco_merc'];
 $quantidade=$_POST['qtd_merc'];
 $cod_merc=$_POST['cod_merc'];
//Execute the query
 
mysqli_query($connect,"UPDATE mercadoria SET tipnegoc_merc='".$tiponegoc."', nome_merc='".$nome."',tipmerc_merc='".$tipomerc."',preco_merc='".$preco."',qtd_merc='".$quantidade."' WHERE cod_merc='".$cod_merc."'");

if(mysqli_affected_rows($connect) > 0){
	echo "<p>Mercadoria Alterada</p>";
	echo "<p><a href='index.php'>Voltar</a></p>"; 
} else {
	echo "Erro ao atualizar<br />";
	echo mysqli_error ($connect);
}
?>
