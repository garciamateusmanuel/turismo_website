<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Contacte-nos</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/turismo_website/css/styleContactos.css">
</head>
<body background="/turismo_website/imagens/0003_uige-angola.jpg">
	<!-- script que permite carregar o menu e o rodape -->
	<script>
	const xhr = new XMLHttpRequest();
	xhr.open('GET', '/turismo_website/PagsSecundarias/menu.html');
	xhr.onload = function(){
		if (xhr.status===200){
			const content = document.getElementById('menu');
			content.innerHTML=xhr.responseText;
		} else{
			console.error('erro ao carregar o conteudo:', xhr.statusText);
		}
	}
    xhr.send();
	const xyz = new XMLHttpRequest();
	xyz.open('GET', '/turismo_website/PagsSecundarias/rodape.php');
	xyz.onload = function(){
		if (xyz.status===200){
			const content = document.getElementById('rodape');
			content.innerHTML=xyz.responseText;
		} else{
			console.error('erro ao carregar o conteudo:', xyz.statusText);
		}
	}
	xyz.send();
	</script>

	<div class="navbar">
		<div class="logo">
			<h1>AVENTURA-UÍGE</h1>
		</div>
		<div class="menu">
		<header id='menu'> <!--Aqui aparecerá o menu--> </header>
		</div>
	</div>
	<div class="body">
		<div class="heading">

			<h2>Entre em contacto!</h2>
			<br>
			<p>Precisa de mais informações ou reservas sobre pontos turistícos? <br>
				Contacte-nos através do terminal +244 942 205 921 ou envie um E-mail </p>
				<br>
			<h2>Quer anunciar no AVENTURA-UÍGE</h2>
			<br>
			<p>AVENTURA-UÍGE é um portal turístico em desenvolvimento,
	com o objectivo de proporcionar e divulgar os pontos turísticos da província do Uíge. <br>
Anuncie aqui e beneficie de uma exposição privilegiada!</p>
<br><br><br>

<div class="form">
	<form action="" method="post">
		<input class="nome" type="text" name="name" placeholder="Seu nome"><br><br>
		<input class="email" type="email" name="email" placeholder="Seu email"><br><br>
		<input class="assunto" type="text" name="subject" placeholder="Assunto"><br><br>
		<textarea class="mensagem" name="content" id="" cols="30" rows="10" placeholder="Mensagem"></textarea><br><br>
		<button class="enviar" type="submit">Enviar</button>
	</form>
</div>
		</div>		
	</div>
	
	<div class="footer">
	<footer id="rodape"></footer>
	</div>
</body>
</html>