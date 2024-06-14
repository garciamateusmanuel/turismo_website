<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Uíge</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/turismo_website/css/styleSobreProvincia.css">
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
	<div class="body">
		<div class="heading">
		<h2>UÍGE - TERRA DO BAGO VERMELHO</h2>
		<br>
		<p>Uíge (por vezes erroneamente grafada como Uíje) é uma das 18 províncias de Angola, 
			localizada na região norte do país. Sua capital está na cidade e município de Uíge.</p>
				<br>
				<p>Segundo as projeções populacionais de 2018, elaboradas pelo Instituto Nacional 
					de Estatística, conta com uma população de 1 662 047 habitantes e área territorial de 58 698 km².
				</p>
				<br>
				<p>É constituída por 16 municípios: Uíge, Alto Cauale, Ambuíla, Bembe, Buengas, Bungo, Milunga, Damba, 
					Maquela do Zombo, Mucaba, Negage, Puri, Quimbele, Quitexe, Sanza Pombo e Songo.</p>
					<br>
					<p>A província recebe a alcunha de "terra do bago vermelho" ou "terra do grão vermelho", em alusão ao 
					seu sustentáculo econômico, as imensas lavoras de café.</p>
				<br>
				<div id="centerImg"><img src="/turismo_website/imagens/0003_uige-angola.jpg" alt="imagem da cidade do Uíge" width="500" height="250"></div> 
			
	</div>


	<div class="heading2">
		<h2>A VISITAR</h2>
		<br>
		<p>A província do Uíge tem belezas naturais e inúmeros sítios históricos para visitar:</p>
		<br>
		<p>
			<ul style="list-style-type: circle;">
				<li>Quedas do Bombo sobre o rio Cuilo;</li>
				<li>Quedas do Massau;</li>
				<li>Quedas de Camulungo;
				<li>Lagoa do Feitiço;</li>
				<li>Lagoa de Mavoio;</li>
				<li>Lagoa do Sacapete;</li>
				<li>Vale do Loge;</li>
				<li>Morros do alto Caual;</li>
				<li>Pedra de N’Zinga N’Zambi;</li>
				<li>Pedra de Kakula Quimanga;</li>
				<li>Pedra do Tunda fica situada no Negage;</li>
				<li>Reserva Florestal do Beu, com uma área de 1.400 Km². A vegetação é do tipo mosaico, floresta densa. 
					A reserva está limitada a norte pela fronteira com a República 
					Democrática do Congo, a oeste com o rio Zadi, a leste com o rio Beu, e a sul com acomuna do Beu;</li>
				<li>Antiga Administração do Concelho;</li>
				<li>Casas Antigas do Estado;</li>
				<li>Busto do Heroi N`bemba, fica na entrada do bairro MBemba NGango, no Uíge e foi um soba da cidade;</li>
				<li>Igreja de São José, junto das pedras do Encoje, datadas do século XVIII;</li>
				<li>Figuras rupestres de Kisadi;</li>
				<li>Pinturas rupestres da Cabala;</li>
				<li>Ponte Mágica sobre o rio Vamba Wa Mbamba;</li>
				<li>Ruina do Fortim de Maquela;</li>
				<li>Túmulo do Ancião Mekabango, grande guerreiro na resistência contra a ocupação colonial;</li>
				<li>Túmulo do Grande Rei Mbianda-Ngunga, guerreiro da resistência à ocupação.</li>
			</ul>
		</p>			
		</div>
	</div>

			<div class="footer">
			<footer id="rodape"></footer>
			</div>
</body>
</html>