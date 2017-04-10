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
//Execute the query
 
mysqli_query($connect,"INSERT INTO mercadoria(tipnegoc_merc,nome_merc,tipmerc_merc,preco_merc,qtd_merc)
				VALUES('$tiponegoc','$nome','$tipomerc','$preco','$quantidade')");

if(mysqli_affected_rows($connect) > 0){
	echo "<p>Mercadoria Cadastrada</p>";
	echo "<p><a href='index.php'>Voltar</a></p>"; 
} else {
	echo "Erro ao Cadastrar<br />";
	echo mysqli_error ($connect);
}
?>
