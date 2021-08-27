<?php 

 ?>

<link rel="stylesheet" type="text/css" href="css/style_contato.css">

<div>
	<h1>Fale Conosco</h1>
</div>

<div class="msg_left">
	
	<form method="POST" action="../funcao/envia.php">
		<label>Digite seu nome:
			<input type="text" name="nome" value="" placeholder="ex: Doces Lili" required>
		</label>
		<label>Digite seu e-mail:
			<input type="email" name="email" value="" placeholder="ex:Lili@gmail.com" required>
		</label>
		<label>Digite o assunto:
			<input type="text" name="assunto" value="" placeholder="ex: orçamento" required>
		</label>
		<label>Digite sua mensagem:
			<input type="text" name="msg" value="" placeholder="Digite sua mensagem aqui" required>
		</label>				
			<input class="envia" type="submit">
	</form>
</div>

<div class="msg_rigth">
	<a href="mailto:falarcomlili@gmail.com"><img id="email" src="img/email.png" alt="email"></a>
	<p>falarcomlili@gmail.com</p>
	<a href="https://api.whatsapp.com/send?phone=5547999999999&text=Ol%C3%A1!%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20os%20produtos%20do%20site."><img id="zap" src="img/zap.png" alt="zap"></a>
	<p>(47) 99999-9999</p>
	<p id="endereco">Estrada Geral, Estr. Saltinho, Campo Alegre - SC, 89294-000</p>
</div>