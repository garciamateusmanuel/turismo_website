<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" type="text/css" href="/turismo_website/css/styleLugar.css">
    <title>Lugares </title>
</head>

<body>
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
			<h2>AVENTURA-UÍGE</h2>
		</div>
		
		<div class="menu">	
		<header id='menu'> <!--Aqui aparecerá o menu--> </header>
		</div>
	</div>
	
    <main>
        <div class="general">
            <div class="container">
                <div class="collums">
                    <div class="collum-left">
                        <h1>UÍGE</h1>
                        <p>A província recebe a alcunha de "terra do bago vermelho" ou "terra do grão vermelho", em alusão ao 
						seu sustentáculo econômico, as imensas lavoras de café
						</p>                    
						<a href="#" id="meuLink"><button>Saiba Mais</button></a>
                    </div>
                    <div class="collum-right">
                        <div class="card card1">
                            <h5>Grutas do Nzenzo</h5>
                        </div>
                        <div class="card card2">
                            <h5>Lagoa do Feitiço</h5>
                        </div>
                        <div class="card card3">
                            <h5>Reserva Florestal do Beu</h5>
                        </div>
                        <div class="card card4">
                            <h5>Lagoa do Mufututu</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    
	
	<div class="footer">
		<footer id="rodape"></footer>
	</div>
	<script src="/turismo_website/js/scriptscard.js"></script>
</body>
</html>