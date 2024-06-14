<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Lazer</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/turismo_website/css/styleLazer.css">
</head>
<body background="/turismo_website/imagens/lazerBackground.jpg">
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
	<main>
	<div class="body">
		<div class="heading">

			<h2> <br><br><br><br><br><br><br><br><br> EM MANUNTENTENÇÃO!</h2>
		


		</div>
	
		
	</div>
</main>
		
	<div class="footer">
	<footer id="rodape"></footer>
	</div>
</body>
</html>