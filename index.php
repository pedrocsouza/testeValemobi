<!DOCTYPE html>
<html lang="pt-br" style="
    margin-top:55px;
">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Principal</title>
    
	<!-- Bootstrap -->
	<!-- Última versão CSS compilada e minificada -->
	<link rel="stylesheet" href="css/bootstrap.min.css"> 
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<!-- Tema CSS -->
	<link rel="stylesheet" href="css/estilos.css">

  </head>
  <body>
		<?php 
			require 'php/database.php';
			include_once("menu.php");
		?>
		
		<form class="form-verrtical" method="post" action="proc_cad_merc.php">
		
			<div class="form-group">
				<select class="form-control" name="tipo_neg">
					<option value="Compra">Compra</option>
					<option value="Venda">Venda</option>
    
				</select>
			</div>
		
			<div class="form-group">
				<input type="text" class="form-control" name="nome_merc" placeholder="Nome da Mercadoria">
			</div>
			
			<div class="form-group">
				<input type="text" class="form-control" name="tipo_merc" placeholder="Tipo da Mercadoria">
			</div>
			
		
		
		<div class="form-inline">
			<div class="form-group">	
			<div class="input-group">
					<div class="input-group-addon">R$</div>
					<input type="text" class="form-control" name="preco_merc" placeholder="Preço">
			</div>
			
				<input type="number" class="form-control" name="qtd_merc" min="1" max="100" placeholder="Quantidade">
			</div>
		</div> 
		
		<div class="form-inline"> 
			<button type="submit" class="btn btn-primary" style="margin-top:10px;" >Cadastrar</button>
			<button type="button" class="btn btn-default" style="margin-top:10px;">Cancelar</button>
		</div>
	</form>
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <!-- Última versão JavaScript compilada e minificada -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jscript.js"></script>
  </body>
</html>