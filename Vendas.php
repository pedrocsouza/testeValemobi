<?php
	include 'php/database.php';
	include_once 'menu.php';
	?>
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
		$result = mysqli_query($connect,"SELECT * FROM mercadoria where tipnegoc_merc='Venda'");
		$row=mysqli_fetch_assoc($result);
		$codigo=$row["cod_merc"];?>
 
			  <table class="table table-striped">
              <thead>
                <tr>
                  <th>Tipo do Negocio</th>
                  <th>Nome da Mercadoria</th>
                  <th>Tipo da Mercadoria</th>
				  <th>Preço(R$)</th>
				  <th>Quantidade</th>
				</tr>
              </thead>
              <tbody>
				 <script language="JavaScript" type="text/JavaScript">
				function confirma(id) {
					var confirmar = confirm("Tem certeza que deseja apagar o Aviso?");
					if(confirmar){
						window.location ='proc_apa_merc.php?cod_merc='+id+'';
					}
				}
			  </script>
				<?php	
					
				if(!empty($result)){
					foreach($result as $res){//listagem dos dados
						echo  "<tr>";
						echo  "<td>".$res['tipnegoc_merc']."</td>";
						echo  "<td>".$res['nome_merc']."</td>";
						echo  "<td>".$res['tipmerc_merc']."</td>";
						echo  "<td>".$res['preco_merc']."</td>";
						echo  "<td>".$res['qtd_merc']."</td>";
						echo "<td>	<a href='merc_editar.php?cod_merc=".$res['cod_merc']."'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
									<a href='#'><button type='button' class='btn btn-sm btn-danger' onclick='return confirma(".$res['cod_merc'].")' >Apagar</button></a>
							  </td>";
						
						echo  "<tr>";
					}
				}else{
					echo "<h3>Não Possui Mercadorias!</h3>";
				}	
				?>           
              </tbody>
            </table>
  <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <!-- Última versão JavaScript compilada e minificada -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jscript.js"></script>
  </body>
</html>