<?php

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Contato</title>
	<link rel="stylesheet" type="text/css" href="../Css/style_contato.css">
</head>
<body>
	<header>
		<?php include("header.php") ?>
	</header>

	<div class="container">
			<h1>Entre em Contato</h1>
			<form method="POST" action="formulario-contato.php">
				<label>Digite seu nome:
					<input type="text" name="nome" value="" placeholder="ex: Paulo Henrique" required>
				</label>
				<label>Digite seu e-mail:
					<input type="email" name="email" value="" placeholder="ex: paulo@gmail.com" required>
				</label>
				<label>Digite o assunto:
					<input type="text" name="assunto" value="" placeholder="ex: orçamento" required>
				</label>
				<label>Digite sua mensagem:
					<input type="text" name="msg" value="" placeholder="Digite sua mensagem aqui" required>
				</label>
				
						
				
				<input class="send" type="submit">
			</form>
		</div>

		<footer>
			
		</footer>

</body>
</html>

