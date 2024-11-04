<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palestrantes - VII Congresso Municipal de Educação de São Paulo</title>
    
    <link rel="shortcut icon" href="logo_cortada.ico" type="image/x-icon">
    <meta name="description" content="VII Congresso Municipal de Educação de São Paulo">
    <meta name="robôs" content="index, follow">
    <meta name="keywords" content="VII Congresso Municipal de Educação de São Paulo">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--FONTE-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    
<!-- MENU-->
<style>
    #scrollToTopBtn {
        display: none;
		position: fixed;
		bottom: 20px;
		right: 11px;
		background-color: #3185ef;
		color: #fff;
		border: none;
		cursor: pointer;
		z-index: 1;
		font-size: 14px;
		height: 40px;
		width: 40px;
		border-radius: 37%;
    }
	
	.itens{
		display: flex;
		justify-content: center;
		margin-bottom: 15px;
	}
	
	.itens a{
		font-size: 16px;
		font-weight: bold;
		margin-right: 60px;
		color: #774370;
		text-decoration: none;
	}
	
	.itens a:hover{
		text-decoration: none;
		color: #C24EA3;
	}
	
	
	@media screen and (max-width: 1175px) {
		.itens a{
			font-size: 15px;
			font-weight: bold;
			margin-right: 40px;
		}
	}
	
	
	.posicao_logo{
		margin-top: 0px;
		margin-bottom: 20px;
	}
</style>
    
    <div style="background-color: #65097c; font-weight: bold; color: #FFF; width: 100%; padding: 5px; float: left; position: relative; font-size: 16px; display: flex; justify-content: center; z-index: 99">
        <div style="float: left;">
            Alt + 1- menu
        </div>

        <div style="float: left; margin-left: 40px;">
            Alt + 2- conteudo
        </div>

        <div style="float: left; margin-left: 40px;">
            Alt + 3- rodape
        </div>
    </div>

<!-- MENU -->
  <div id="menu" style="z-index: 2; background-color: #FFF; border-bottom: 3px solid #65097c; padding: 3px; margin-bottom: 8px;float: left; width: 100%; margin-top: 34px;" class="d-lg-block d-none">
    <div class="menu col-12 offset-0">
		<div class="row">
			<div class="col-4 offset-4" style="text-align: center">
				<img src="logo_topo_site.png" class="img-fluid posicao_logo"/>
			</div>
			  <div class="col-12 offset-0 itens">
				<a href="index.php"><img src="icone_home.svg" style="width: 22px; margin-top: -6px;"/></a>
				<a href="#evento">O Congresso</a>
				<a href="#programacao">Programação</a>
				<a href="#inscricoes">Inscrições</a>
				<a href="#educador">Educador em Destaque</a>
				<a href="#localizacao">Localização</a>
				<a href="fale-conosco.php">Fale Conosco</a>
			  <!--  <a href="fale-conosco.php"><div class="box-contato"><span style="font-size: 28px;position: absolute; color: #013044" class="material-symbols-outlined">email</span></div></a>-->
			  </div>
		</div>
    </div>
  </div>


  <div style="background-color: #FFF; padding: 10px; margin-bottom: 40px; border-bottom: 1px solid #2d1609;" class="d-lg-none d-block">
    <div class="menu col-10 ">
        <nav class="navbar navbar-expand-lg navbar-light">
            
            <button class="" style="background: #ffffff; border: none;" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#evento">O Congresso</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#programacao">Programação</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#inscricoes">Inscrições</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="#educador">Educador em Destaque</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#localizacao">Localização</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fale-conosco.php">Fale Conosco</a>
                    </li>
                    
                </ul>
                
            </div>
        </nav>




        <!--a href="fale-conosco.php"><div class="box-contato"><span style="font-size: 35px;position: absolute; color: #013044;" class="material-symbols-outlined">email</span></div></a-->
    </div>
  </div>

   <button id="scrollToTopBtn">Topo</button>

   <script src="js/script_menu.js"></script>

    <link rel="stylesheet" href="css/estilo.css">
    <style>
        .faq-item {
            margin-bottom: 20px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            overflow: hidden;
        }
        .faq-item h5 {
            background: #9c65b1;
            color: white;
            padding: 15px;
            margin: 0px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .faq-item h5:hover {
            background: #965596;
        }
        .faq-item p {
            padding: 25px;
            margin: 0;
            display: none;
            background: #f9f9f9;
        }
    </style>
</head>
<body>
    <?php include('menu.php');?>

    <div class="row">
        <div class="col-12 fundo_faixa_palestrantes">
            <img src="icone_palestrantes.svg" alt="Ícone de Palestrantes"/> LOCALIZAÇÃO DO EVENTO
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="container mt-5">
                <h4>FAQ - Localização do VII Congresso Municipal de Educação de São Paulo 2024</h4>
                <div class="faq mt-3">
                    <div class="faq-item">
                        <h5 onclick="toggleAnswer(this)">1. Qual é o endereço do evento?</h5>
                        <p>Av. Olavo Fontoura, 1209 - Portão 38 - Santana, São Paulo - SP, 02012-021, Brasil.</p>
                    </div>
                    <div class="faq-item">
                        <h5 onclick="toggleAnswer(this)">2. Como posso chegar ao Anhembi?</h5>
                        <p><strong>Linha 1 - Azul: </strong>Pegue o metrô até a estação Carandiru. A partir daí, o Anhembi está a uma curta caminhada<br><br>
                        <strong>Linha 3 - Vermelha:</strong>Você pode pegar o metrô até a estação Tiradentes e, de lá, pegar um ônibus ou caminhar até o Anhembi.<br><br>
                        <strong>Ônibus: </strong>Diversas linhas de ônibus passam nas proximidades do Anhembi. Verifique a linha que atende seu ponto de partida. As linhas que têm paradas perto do Anhembi incluem: 175C-10, 629I-10, e 4000-10.<br><br>
                        <strong>Carro: </strong>Se você estiver vindo do centro de São Paulo, pegue a Av. Tiradentes e siga em direção à Av. Olavo Fontoura. O Anhembi está localizado na Av. Olavo Fontoura, 1209.<br><br>

                        
                    </div>
                    <div class="faq-item">
                        <h5 onclick="toggleAnswer(this)">3. Estacionamento</h5>
                        <p>O Anhembi possui estacionamento disponível, mas é recomendável chegar cedo, especialmente durante eventos grandes, para garantir uma vaga.</p>
                    </div>
                    <div class="faq-item">
                        <h5 onclick="toggleAnswer(this)">4. Alternativas</h5>
                        <p><strong>Apps de Transporte:</strong> Você também pode usar serviços como Uber ou 99. Basta inserir "Anhembi" como destino</p>
                    </div>
                    <div class="faq-item">
                        <h5 onclick="toggleAnswer(this)">5. Dicas</h5>
                        <p><strong>Verifique a Trânsito:</strong> Utilize aplicativos de navegação como Google Maps ou Waze para checar as condições do trânsito antes de sair<br><br>
                        <strong>Chegada Antecipada:</strong>Chegar com antecedência pode ajudar a evitar estresse e garantir que você encontre seu caminho sem pressa</p>
                    </div>
                    <div class="faq-item">
                        <h5 onclick="toggleAnswer(this)">6. Qual é a programação das palestras e onde elas acontecerão?</h5>
                        <p>As palestras ocorrerão na Sala de Convenções B. Consulte o site do evento para detalhes sobre horários e palestrantes.</p>

                    </div>
                    <?php include ("noticias.php");?>
	
	<div class="row localizacao" id="localizacao">
		<div class="col-12">
			<div>
				<div class="col-12 offset-0" style="text-align: center; margin-bottom: 20px;">
					
				</div>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.1907648658666!2d-46.63818566346007!3d-23.51652595007027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce587c0ea6b26b%3A0x17030eaf9f2c8b6a!2sPavilh%C3%A3o%20de%20Exposi%C3%A7%C3%B5es%20do%20Distrito%20Anhembi!5e1!3m2!1spt-BR!2sbr!4v1729097008117!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</div>
	
	
	<?php include("rodape.php");?>
	
	
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
                
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12 fundo_faixa_palestrantes">
            <img src="./local" alt="Ícone de Palestrantes"/> Estruturas do Evento
        </div>
    </div>

    
    
    <div class="row">
        <div class="col-12">
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-6 box_pessoa">
                        <div class="d-flex align-items-center">
                            <img src="./praca.pgn.jpg" alt="Endereço" class="speaker-photo">
                            <div class="speaker-info">
                                <h4> Praça de Alimentação</h4>
                                <p><strong>Lanches Rápidos: </strong> Hot dogs, hambúrgueres, e salgados</p>
                                <p><strong>Comidas Típicas: </strong>Pratos da culinária brasileira</p>
                                <p><strong>Opções Vegetarianas e Veganas: </strong>Saladas e pratos preparados sem ingredientes de origem animal.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 box_pessoa">
                        <div class="d-flex align-items-center">
                            <img src="./network.pgn.webp" alt="network" class="speaker-photo">
                            <div class="speaker-info">
                                <h4>Área de Networking:</h4>
                                <p>Um espaço dedicado para os participantes se conectarem, localizado próximo à entrada principal. Este é o lugar perfeito para trocar ideias e fazer novos contatos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include("rodape.php");?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleAnswer(element) {
            const answer = element.nextElementSibling;
            answer.style.display = answer.style.display === "block" ? "none" : "block";
        }
    </script>

    
	
	<div class="row rodape">
		<div class="col-12 conteudo_rodape">
			 <div class="row">
				<div class="col-12">
					<img class="logo_rodape" src="logo_secretaria_educao_branco.png"/>
				</div>
			 	<div class="col-12 endereco_rodape">
					<p>Secretaria Municipal de Educação</p>
					<p>Rua Borges Lagoa, 1230, Vila Clementino, São Paulo - SP</p>
				</div>
				<div class="col-12 endereco_rodape">
					<p class="contato_rodape">Contatos</p>
					<p class="telefone_email_rodape">Tel.: (11) 3396-0200</p>
					<p>contato@congressomunicipal.sme.prefeitura.sp.gov.br</p>
				</div>
				
			</div>
		</div>
	
	</div>
	
	
		
	 <?php //include('rodape.php');?>

    <script>
		function exibe_sub(prefix) {
			// Seleciona os elementos que serão exibidos/ocultados
			const box1 = document.getElementById(`${prefix}1`);
			const box3 = document.getElementById(`${prefix}3`);
			const box4 = document.getElementById(`${prefix}img`);

			// Função para verificar se o elemento está visível
			function isVisible(element) {
				return window.getComputedStyle(element).display === 'block';
			}

			// Alterna a visibilidade entre 'block' e 'none'
			box1.style.display = isVisible(box1) ? 'none' : 'block';
			box3.style.display = isVisible(box3) ? 'none' : 'block';
			box4.style.display = isVisible(box4) ? 'none' : 'block';
		}


		// Inicializa com todos os eventos escondidos
		window.onload = function() {
			const allBoxes = document.querySelectorAll('.box_exibicao_eventos');
			allBoxes.forEach(box => box.style.display = 'none');
		};
	
	
	 
		function animarContador(idElemento, inicio, fim, incremento, duracao) {
			const elemento = document.getElementById(idElemento);
			let valorAtual = inicio;
			const tempoDeIncremento = Math.round(duracao / ((fim - inicio) / incremento));

			const contador = () => {
				const interval = setInterval(function () {
					valorAtual += incremento;
					elemento.textContent = valorAtual;

					if (valorAtual >= fim) {
						clearInterval(interval); // Para o contador quando atingir o valor final
						elemento.textContent = fim; // Garante que o valor final seja exato
					}
				}, tempoDeIncremento);
		};

    return contador; // Retorna a função do contador
}

	// Função para observar a visibilidade dos elementos
	function observarElemento(idElemento, contador) {
		const elemento = document.getElementById(idElemento);

		const observer = new IntersectionObserver(function (entries) {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					contador(); // Inicia o contador quando o elemento está visível
					observer.unobserve(elemento); // Para de observar após iniciar a contagem
				}
			});
		});

		observer.observe(elemento); // Começa a observar o elemento
	}

	// Inicializa os contadores quando os elementos ficarem visíveis
	window.onload = function() {
		observarElemento('contador', animarContador('contador', 0, 8100, 300, 4000)); // contador público
		observarElemento('contador2', animarContador('contador2', 0, 48, 4, 4000));  // contador palestrantes
		observarElemento('contador3', animarContador('contador3', 0, 120, 10, 4000)); // contador atividades
	};
	
	
	function showContent(tabId) {
		// Remove a classe "active" de todas as abas e conteúdos
		const tabs = document.querySelectorAll('.tab');
		const contents = document.querySelectorAll('.content');
		tabs.forEach(tab => tab.classList.remove('active'));
		contents.forEach(content => content.classList.remove('active'));

		// Adiciona a classe "active" na aba clicada e no conteúdo correspondente
		document.querySelector(`.tab[onclick="showContent('${tabId}')"]`).classList.add('active');
		document.getElementById(tabId).classList.add('active');
	}
	
	
	
	/*parte do JS para contagem de dias*/
	  // Define a data-alvo
        var targetDate = new Date("November 29, 2024 08:00:00").getTime();

        // Atualiza a contagem regressiva a cada segundo
        var countdown = setInterval(function() {
            var now = new Date().getTime(); // Horário atual do usuário
            var distance = targetDate - now;

            // Cálculo dos dias, horas, minutos e segundos
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
           // var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Exibe a contagem no elemento com id="countdown"
            document.getElementById("countdownDia").innerHTML = 
                days + " dias ";
				
				 document.getElementById("countdownHora").innerHTML = 
                hours + " h ";
				
				 document.getElementById("countdownMinuto").innerHTML = 
                minutes + " min ";


            // Se a contagem terminar, exibe uma mensagem
            if (distance < 0) {
                clearInterval(countdown);
                document.getElementById("countdown").innerHTML = "Evento iniciado!";
            }
        }, 1000);

  </script>

  
</body>
</html>
