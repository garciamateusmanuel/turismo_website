<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/turismo_website/css/styleGaleria.css">
    <title>Nossa Galeria</title>
</head>
<body>
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
    <header>
        <h2>Galeria turística</h2>
    </header>
    <main>
        <div class="gallery-container">
            <a href="/turismo_website/imagens/grutas-do-Nzenzo.png" class="gallery-items">
                <img src="/turismo_website/imagens/grutas-do-Nzenzo.png" alt="grutas-do-Nzenzo">
				<figcaption>Grutas do Nzenzo</figcaption>
            </a>
            <a href="/turismo_website/imagens/LAGO MUFUTUTU.jpg" class="gallery-items">
                <img src="/turismo_website/imagens/LAGO MUFUTUTU.jpg" alt="Lago Mufututu">
				<figcaption>Lago do Mufututu</figcaption>
            </a>
            <a href="/turismo_website/imagens/lagoa do feitiço.jpeg" class="gallery-items">
                <img src="/turismo_website/imagens/lagoa do feitiço.jpeg" alt="lagoa do feitiço">
				<figcaption>Lagoa do Feitiço</figcaption>
            </a>
            <a href="/turismo_website/imagens/RESERVA FLORESTAL DO BÉU.jpg" class="gallery-items">
                <img src="/turismo_website/imagens/RESERVA FLORESTAL DO BÉU.jpg" alt="reserva Florestal do Béu">
				<figcaption>Reserva Florestal do Béu</figcaption>
            </a>
            <a href="/turismo_website/imagens/0003_uige-angola.jpg" class="gallery-items">
                <img src="/turismo_website/imagens/0003_uige-angola.jpg" alt="Governo Provincial">
				<figcaption>Governo Provincial do Uíge</figcaption>
            </a>
            <a href="/turismo_website/imagens/uige-sugestoes-banner-1900x500.png" class="gallery-items">
                <img src="/turismo_website/imagens/uige-sugestoes-banner-1900x500.png" alt="Uíge">
				<figcaption>Floresta</figcaption>
            </a>
        </div>        
    </main>


    <div class="footer">
	<footer id="rodape"></footer>
	</div>
</body>
</html>