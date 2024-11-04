
	
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
