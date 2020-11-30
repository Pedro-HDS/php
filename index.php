<!doctype html>

<html lang = "pt-br" >

	<head>
		<link rel = "stylesheet" type ="text/css" href="css/style.css">
		<script type="text/javascript" src = "../plugin/tinymce/tinymce.min.js"></script>
		<script type="text/javascript" src = "../plugin/tinymce/init-tinymce.js"></script>
		<script type="text/javascript" src = "../plugin/tinymce/langs/pt_Br.js"></script>
		<title>Cadastro Livro</title>
		<meta charset ="utf-8">
	</head>
	
	<body>

	<section class = "formulario">
		<form method="post" action="crud.php" class = "cadastrolivro">
		<section class = "dados">
			<p>Nome: <input type = "text" name = "nome"/> </p>
			<p>Editora:<input type = "text" name = "editora"/></p>
			<p>Autor: <input type = "text" name = "autor"/></p>
			<p>Ano: <input type = "text" name = "ano"/><br/></p>
			<p class="generoParagrafo">Genero: 
			<select class = "genero" name = "divisao_postagem">
			<option value = "Ação">Ação</option>
			<option value = "Terror">Terror</option>
			<option value = "Romance">Romance</option>
			<option value = "Conto">Conto</option>
			<option value = "Crônica">Crônica</option>
			<option value = "Poesia">Poesia</option>
			<option value = "Estudos">Estudos</option>
			<option value = "Religião">Religião</option>
		</select>
			</p>
		<p class="descricaoParagrafo">Descricao: <textarea class="tinymce descricao" name="dercri"></textarea></p>
		<button type="submit" name = "teste" value = "<?php echo $id ?>" class = "botao btn ">Cadastrar</button>
		</section>
		</form>
	</section>

			<?php

				require_once ("conexao.php");
				$connect = new connection();
				$insert = mysqli_query($connect->conexao(),"SELECT * FROM livro");
				while ($livros = mysqli_fetch_array($insert)) {

			?>
			<table border="0" width="50%" cellpadding="4" cellspacing="4">
				
				<tr>
					<td>ID</td>
					<td>Nome do Livro</td>
					<td>Editora</td>
					<td>Autor</td>
					<td>Descricao</td>
					<td>Ano</td>
					<td>Genero</td>
				</tr>
				<tr bgcolor="#ccc">
					<td><?php echo $livros["id"];?></td><br>
					<td><?php echo $livros['nome_livro'];?></td>
					<td><?php echo $livros['editora'];?></td>
					<td><?php echo $livros['autor'];?></td>
					<td><?php echo $livros['descricao'];?></td>
					<td><?php echo $livros['ano'];?></td>
					<td><?php echo $livros['genero'];?></td>
					<td><a href="update.php?id=<?php echo $livros["id"]; ?>" class = "button-cad">Alterar</a></td>
					<td><a href="delete_livro.php?id=<?php echo $livros["id"]; ?>" class = "button-cad">Deletar</a></td>
				</tr>
			</table>
			
			<?php }?>
			<br><br>
			

	</body>
	
</html>
