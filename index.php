<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title>Doces da Lili</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<header>
			<nav>
				
				<div class="topo">
					<img class='logo' src="img/logo.png">
					<a href="https://www.facebook.com/">
						<img id="face" src="img/facebook.png">
					</a>
					<a href="https://www.instagram.com/">
						<img id="insta" src="img/instagran.png">
					</a>
					<h1 class="titulo">Doces da LiLi</h1>
					
				</div class="menu">
				<ul class="link_menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="index.php?pg_sobre=pages/sobre.php">Sobre</a></li>
					<li><a href="index.php?pg_contato=pages/contato.php">Contato</a></li>
				</ul>
			</nav>
		</header>
		<main class="conteudo">
			<?php 
				if (isset($_GET['pg_sobre']) && !empty($_GET['pg_sobre'])){
					$pg_sobre = $_GET['pg_sobre'];
					include ($pg_sobre);
				} if (isset($_GET['pg_contato']) && !empty($_GET['pg_contato'])) {
					$pg_contato = $_GET['pg_contato'];
					include ($pg_contato);
				} else {
					include ("pages/produtos.php");
				}
				
			 ?>

		</main>	
		<footer class="footer">
			<div>
				<p>Paulo Henrique Melo Machado</p>
				<p>Curso: Sistemas para Internet</p>
				<p>RA: 1752414-5</p>
				<p></p>
			</div>
		</footer>
	</body>
</html>