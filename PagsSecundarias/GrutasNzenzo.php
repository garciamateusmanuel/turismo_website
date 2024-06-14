<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta lang="pt-Pt">
	<title>Grutas do Nzenzo</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/turismo_website/css/styleGrutasNzenz.css">
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

	<main>
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
		<h1>Grutas do Nzenzo</h1>
		<p>As grutas do Nzenzo, conhecidas também como Pedra de torneira “Ntadi dya Nzenzo” 
				e considerada uma das 7 maravilhas de Angola, é um local misterioso, porém, único 
				e com uma beleza de abrir a boca de admiração. 
				Foi descoberto recentemente no meio da 
				floresta tropical da província do Uíge, no município de Ambuíla, na sede Mantoyo.</p>
				<br>
				<p>Apesar de ser descoberto recentemente, as grutas já existem há vários anos. 
				Alguns residentes contam que a gruta era usada como local de refúgio para algumas pessoas durante o tempo de guerra.
				</p>
				<br>
				<p>O local é bom para turistas e também para quem deseja ver de perto as maravilhas da natureza encontradas na gruta, 
				algumas sem explicação até aos dias de hoje. Para visitar 
				o local é preciso mais do que vontade e condições por parte dos
				 turistas, é preciso a permissão das autoridades tradicionais.</p>
				<br>
				<h2>Factos misteriosos sobre as Grutas do Nzenzo</h2>
				<br>
				<div id="centerImg"><img src="/turismo_website/imagens/grutas-do-Nzenzo-1-1536x1025.jpg" alt="imagem de grutas do nzenzo" width="700" height="350"></div> 
			<br>
			<p>As grutas do Nzenzo mostram-nos uma imagem do que se pode considerar uma criação natural totalmente única e impressionante, mas, 
				alguns factos sobre elas são capazes de nos deixar curiosos e talvez admirados, como por exemplo, ao entrar nas grutas, 
				os turistas são protegidos por uma sereia que abre as portas da gruta 
				a pedido do soba, mas não é apenas uma vez em que a sereia é contactada pela autoridade tradicional.</p>	
				<br>
				<p>Ao abandonar o local, o Soba contacta novamente a sereia para agradecer pela 
					proteção aos turistas. Razão pela qual, a autoridade 
					tradicional deve ser sempre o último a abandonar o local</p> 
					<br>
					<p>Você já deve perceber por que não se pode entrar sozinho e sem permissão nesse local, mas isso não é só.</p>
					<br>
					<p>No interior da gruta vê-se jorrar uma água daquelas que nos convida a apreciar de perto 
						e aproveitá-lo para um bom banho. Felizmente,
						 é possível, com a permissão da autoridade tradicional tomar um banho dessa água, 
						 mas, o que é mesmo curioso é que a água jorra a 
						 partir de um orifício localizado na parte superior de uma pedra, que é considerada 
						 misteriosa, pois, essa mesma água 
						que jorra dela não se pode perceber de onde vem, ou seja, ninguém consegue explicar 
						claramente de onde vem a água que jorra na gruta.</p>
						<br>
						<p>Vale mencionar o facto de que não há qualquer rio ou 
							lagoa nas proximidades da gruta, sabe-se apenas que a 
							água jorra daquela pedra misteriosa, 
							mas, como pode uma pedra, por si só, jorrar água? Ficam as nossas dúvidas.</p>
							<br>
			<p>Outro facto misterioso é que, segundo lendas, é possível encontrar no local 
				sereias tomando banho ou cobras misteriosas rastejando tranquilamente.</p>
				<br>
				<h2>Como chegar às Grutas do Nzenzo</h2>
		<br>
		<p>Afirma-se que não é fácil chegar até as grutas. Para quem se encontra na capital da província, 
			que recebe o mesmo nome (Uíge) tem de percorrer cerca de 100Km em uma viatura de altura livre do solo elevada, 
			preferencialmente, devido aos buracos que se podem encontrar na via que garante o acesso ao local.</p>
			 <br>
			 <p>
				Por outra, as grutas encontram-se escondidas entre a floresta, o que significa que é difícil 
				achar por conta própria quando se é apenas 
				um turista, aliás, isso não se recomenda a ninguém, até por questões de segurança.
			 </p>
			 <br>
			 <p>Entretanto, o melhor mesmo é ir acompanhado de um residente local para conduzi-lo até às impressionantes grutas do Nzenzo, 
				lembrando que, não se deve chegar ao local sem a permissão das autoridades tradicionais, nesse caso, o Soba daquela região.</p>
				<br>
				<p>Ao chegar às grutas do Nzenzo o Soba conduzirá a cerimónia (necessária) para 
					entrar na gruta ungindo os turistas com óleo de palma e cinza e dando a cada 
					um deles um pouco de cola (macazo), sal e maruvo.</p>
		</div>


	<div class="heading2">
		<h2>Desejas fazer uma reserva?</h2>
		<br>
		<p>Preencha o formulário abaixo:</p>
		<br>
		<div class="form">
	<form action="" method="post">
		<p><label for="">Nome</label><br>
		<input class="nome" type="text" name="nome"><br></p>
		<p><label for="">E-mail</label><br>
		<input class="email" type="email" name="email"><br></p>
		<p><label for="">Data visita</label><br>
		<input class="data" type="date" name="datavisita"><br></p>
		<p><label for="">Número de Visitantes</label><br>
		<input class="numVisitante" type="text" name="numVisitante"><br></p>
		<p><label for="">Telefone</label><br>
		<input class="telefone" type="text" name="telefone"><br></p>
		<p><label for="">Local a Visitar</label><br>
		<input class="local" type="text" name="name" value="Grutas do Nzenzo" readonly><br></p>
		<p><label for="">Preço</label><br>
		<input class="local" type="text" name="name" value="20.000,00" readonly><br></p>
		<p><label for="">Observações</label><br>
		<textarea class="mensagem" name="observacoes" id="" cols="30" rows="3"></textarea></p><br>
		<button class="enviar" type="submit">Enviar</button>
	</form>
</div>

		</div>
	</div>
</main>
<div class="footer">
	<footer id="rodape"></footer>
</div>	
</body>
</html>