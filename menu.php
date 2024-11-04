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