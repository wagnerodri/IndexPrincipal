<style>
    .news-item {
      padding: 15px;
    }
    .news-item img {
      max-height: 300px;
      object-fit: cover;
      width: 100%;
    }
	.news-item h5{
		margin-top: 10px;
		color: #65097c;
		font-weight: bold;
	}
	
	.carousel-control-next, .carousel-control-prev{
		border: none;
		height: 80px;
		width: 50px;
		margin-top: 8%;
	}
  </style>

<div class="row">
	<div class="col-10 offset-1">
		<div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
		  <!--div class="carousel-indicators">
			<button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
			<button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
		  </div-->
		  <div class="carousel-inner">
			<!-- Slide 1 -->
			<div class="carousel-item active">
			  <div class="row">
				<div class="col-lg-4 col-md-12 news-item">
				  <img src="noticias/n1.jpg" alt="Notícia 1">
				  <h5>AEL - Lançamento do Livro Descobri-se - Câmara Municipal</h5>
				  <p>Bruno Ferreira</p>
				</div>
				<div class="col-lg-4 col-md-12 news-item">
				  <img src="noticias/n2.jpg" alt="Notícia 2">
				  <h5>EMEFM Darcy Ribeiro</h5>
				  <p>Bruno Ferreira</p>
				</div>
				<div class="col-lg-4 col-md-12 news-item">
				  <img src="noticias/n3.jpg" alt="Notícia 3">
				  <h5>Sala de Recursos Especiais</h5>
				  <p></p>
				</div>
			  </div>
			</div>
			<!-- Slide 2 -->
			<div class="carousel-item">
			  <div class="row">
				<div class="col-lg-4 col-md-12 news-item">
				  <img src="noticias/n4.jpg" alt="Notícia 4">
				  <h5>Rodas de Conversa, Atividades Coletivas, Em Grupo</h5>
				  <p></p>
				</div>
				<div class="col-lg-4 col-md-12 news-item">
				  <img src="noticias/n5.jpg" alt="Notícia 5">
				  <h5>Unidades Educacionais</h5>
				  <p></p>
				</div>
				<div class="col-lg-4 col-md-12 news-item">
				  <img src="noticias/n6.jpg" alt="Notícia 6">
				  <h5>43ª Edição do Recreio nas Férias - Visita ao Estário do Morumbi</h5>
				  <p></p>
				</div>
			  </div>
			</div>
		
		  </div>

		  <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden"><img width="30" style="transform: rotate(180deg);" src="seta.svg"/></span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden"><img width="30" src="seta.svg"/></span>
		  </button>
		</div>
	</div>
</div>
