<?php 

$title_page = "Manhattan Café Theatro";
include dirname(__FILE__). '/../includes/header.php'; 

$area["topo"] = true;
$area["painel"] = true;
$area["redes"] = true;
$area["programacao"] = true;
$area["descontos"] = true;
$area["eventos"] = true;
$area["hallfama"] = true;
$area["gastronomia"] = false;
$area["contato"] = true;

if(!$area["topo"]) { echo '<style>body {background: #000} .navegation,.bg-topo {display:none;}</style>'; }

?>


<main class="main mb-0">

	<?php if($area["painel"]) : ?>
	<div data-animate="fade" data-delay="3">

	<!-- Slider main container -->
	<div class="swiper swiper1">
	  <!-- Additional required wrapper -->
	  <div class="swiper-wrapper">

	    <!-- Slides -->
	    <div class="swiper-slide">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-md-9 px-lg-4 px-5 text-center slide-item">
					<img src="assets/img/painel/bem-vindo.png" class="img-fluid" alt="">
				</div>
			</div>
	    </div>

	    <!-- Slides -->
	    <div class="swiper-slide">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-md-9 px-lg-4 px-5 text-center slide-item">
					  <img src="assets/img/painel/diversao-gastronomia.png" class="img-fluid" alt="">
				</div>
			</div>
	    </div>


		<!-- Slides -->
	    <div class="swiper-slide">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-md-9 px-lg-4 px-5 text-center slide-item">
					<img src="assets/img/painel/manhattan-cozinha-show.png" class="img-fluid" alt="">
				</div>
			</div>
	    </div>



	  </div>

	  <!-- If we need pagination -->
	  <div class="swiper-pagination swiper-pagination-swiper1"></div>

	  <!-- If we need navigation buttons -->
	  <div class="swiper-button-prev swiper-button-prev-swiper1"></div>
	  <div class="swiper-button-next swiper-button-next-swiper1"></div>

	  <!-- If we need scrollbar -->
	  <!-- <div class="swiper-scrollbar"></div> -->
	</div>

	</div>

	<?php endif; ?>

	<?php if($area["redes"]) : ?>
	<div class="text-center py-5" data-animate="zoom" data-delay="3">
		<p>
			<a href="https://bit.ly/1t9AE12" target="_blank"><img src="assets/img/icon-trip.png" width="40" class="my-1 mx-1" alt="TripAdvisor"></a>
			<a href="https://www.youtube.com/user/Ronaldmenezesjunior/" target="_blank"><img src="assets/img/icon-youtube.png" width="40" class="my-1 mx-1" alt="Youtube"></a>
			<a href="https://www.facebook.com/manhattanrecife" target="_blank"><img src="assets/img/icon-facebook.png" width="40" class="my-1 mx-1" alt="Facebook"></a>
			<a href="https://instagram.com/manhattancafetheatro" target="_blank"><img src="assets/img/icon-instagram.png" width="40" class="my-1 mx-1" alt="Instagram"></a>
			<a href="https://api.whatsapp.com/send?phone=5581988884818&text=Atendimento%20por%20Whatsapp.%20Pressione%20Enviar%20para%20iniciar." target="_blank"><img src="assets/img/icon-whatsapp.png" width="40" class="my-1 mx-1" alt="Whatsapp"></a>
		</p>
	</div>
	<?php endif; ?>

	<?php if($area["programacao"]) : ?>
	<section class="programacao pb-4 mb-lg-5"  id="programacao">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center mb-4 mb-lg-5" data-animate="zoom" data-delay="3">
					<h2 class="text-uppercase fw-bold">Programação</h2>

					<hr class="mx-auto" />

					<p class="programacao__subtitulo"><span class="text-white">Na multidão você é apenas um fã,</span> <br>
						<span class="text-warning">no manhattan você faz parte do show!</span></p>

					
				</div>
			</div>


			<div class="row">
				<div class="col-lg-12 mb-5" data-animate="zoom" data-delay="3">

<!-- Slider main container -->
<div class="swiper swiper-programacao">
	<div class="swiper-shadow1"></div>
	<div class="swiper-shadow2"></div>
	<!-- Additional required wrapper -->
	<div class="swiper-wrapper">

	

<!--  -->

	 
			<?php
			
			include dirname(__FILE__). '/../programacao/programacao-slides.php'; 



		
			?>
			<!-- Fim dos slides gerados dinamicamente -->
		

	</div>

	<!-- If we need pagination -->
	<!-- <div class="swiper-pagination swiper-pagination-programacao"></div> -->

	<!-- If we need navigation buttons -->
	<div class="swiper-button-prev swiper-button-prev-programacao"></div>
	<div class="swiper-button-next swiper-button-next-programacao"></div>

	<!-- If we need scrollbar -->
	<!-- <div class="swiper-scrollbar"></div> -->
  </div>

				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<p>
						<a href="programacao" class="text-decoration-none"><span class="text-white">PROGRAMAÇÃO  COMPLETA</span> <span class="text-warning">&raquo;</span></a>
					</p>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>


	<?php if($area["descontos"]) : ?>
	<section class="descontos pt-3 mb-lg-5" id="descontos" data-animate="top" data-delay="3">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="text-uppercase fw-bold">Descontos</h2>


				</div>
			</div>
	
		</div>	
		
		<div class="descontos__conteudo py-lg-5 py-4">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<p class="descontos__subtitulo text-warning">Não perca tempo, solicite seu desconto agora mesmo.</p>
					</div>
				</div>

				<?php
					$arrow = '<svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="10" height="10" viewBox="0 0 24 24"><path d="M21 12l-18 12v-24z"/></svg>';
				?>
		
				<div class="row">
					<div class="col-lg-8 offset-lg-2 py-lg-4 mb-lg-4">
						<ul class="descontos__lista">
							<li>
								<p class="mb-2 mb-lg-0">
									<a href="https://wa.me/558198888481?text=Desconto:%2020%20MAIO%20-%20SÃO%20JOÃO MANHATTAN.%20Pressione%20Enviar%20para%20iniciar" target="_blank" class="text-white text-decoration-none"><?=$arrow;?> <time class="text-warning">20 MAIO</time> - SÃO JOÃO MANHATTAN</a>
								</p>
								<a  href="https://wa.me/558198888481?text=Desconto:%2020%20MAIO%20-%20SÃO%20JOÃO MANHATTAN.%20Pressione%20Enviar%20para%20iniciar" target="_blank" class="btn  btn-outline-secondary">Solicitar Descontar</a>
							</li>
							<li>
								<p class="mb-2 mb-lg-0">
									<a href="https://wa.me/558198888481?text=Desconto:%2026 MAIO - ADILSON RAMOS.%20Pressione%20Enviar%20para%20iniciar" target="_blank" class="text-white text-decoration-none"><?=$arrow;?> <time class="text-warning">26 MAIO</time> - ADILSON  RAMOS</a>
								</p>
								<a href="https://wa.me/558198888481?text=Desconto:%2026 MAIO - ADILSON RAMOS.%20Pressione%20Enviar%20para%20iniciar" target="_blank" class="btn  btn-outline-secondary">Solicitar Descontar</a>
							</li>
							<li>
								<p class="mb-2 mb-lg-0">
									<a href="https://wa.me/558198888481?text=Desconto:%2003 JUNHO - BULINDO NO ARRAIÁ.%20Pressione%20Enviar%20para%20iniciar" target="_blank" class="text-white text-decoration-none"><?=$arrow;?> <time class="text-warning">03 JUNHO</time> - BULINDO NO ARRAIÁ</a>
								</p>
								<a href="https://wa.me/558198888481?text=Desconto:%2003 JUNHO - BULINDO NO ARRAIÁ.%20Pressione%20Enviar%20para%20iniciar" target="_blank" class="btn  btn-outline-secondary">Solicitar Descontar</a>
							</li>
							<li>
								<p class="mb-2 mb-lg-0">
									<a href="https://wa.me/558198888481?text=Desconto:%2012 JUNHO - DIA DOS NAMORADOS.%20Pressione%20Enviar%20para%20iniciar" target="_blank" class="text-white text-decoration-none"><?=$arrow;?> <time class="text-warning">12 JUNHO</time> - DIA DOS NAMORADOS</a>
								</p>
								<a href="https://wa.me/558198888481?text=Desconto:%2012 JUNHO - DIA DOS NAMORADOS.%20Pressione%20Enviar%20para%20iniciar" target="_blank" class="btn  btn-outline-secondary">Solicitar Descontar</a>
							</li>
						</ul>

					</div>
				</div>


				<div class="row">
					<div class="col-lg-12 text-center">
						<p>
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#modal_descontos" class="text-decoration-none"><span class="text-white text-uppercase">Lista completa de descontos</span> <span class="text-warning">&raquo;</span></a>
						</p>
					</div>
				</div>

			</div>
		</div>
	</section>
	<?php endif; ?>


	<?php if($area["eventos"]) : ?>
	<section class="eventos py-5 mt-4 mb-lg-5" data-animate="top" data-delay="3" id="eventos">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="mb-4 mb-md-0"><img src="assets/img/bg-evento1.jpg" class="img-fluid w-100" alt ></div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="px-3 px-md-0">
						<p><a href="javascript:;" data-bs-toggle="modal" data-bs-target="#modal_eventos"><img src="assets/img/titulo-evento.png" class="img-fluid" alt="Faça seu Evento aqui!" ></a></p>

						<p>
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#modal_eventos" class="text-decoration-none"><span class="text-white">TEMOS OS MELHORES PACOTES PARA O SEU MELHOR DIA </span> <span class="text-warning">&raquo;</span></a>
						</p>
					</div>
				</div>
				<div class="col-md-4 d-none d-md-block">
					<img src="assets/img/bg-evento2.jpg" class="img-fluid w-100" alt >
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>


	<?php if($area["hallfama"]) : ?>
	<section class="hallfama pt-2" id="hall-fama" data-animate="top" data-delay="3">

		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="text-uppercase fw-bold">Hall Da Fama</h2>


				</div>
			</div>
	
		</div>	
		
		<div class="hallfama__conteudo py-lg-5 pt-5 pb-2" data-animate="zoom" data-delay="3">
			<div class="container">

				<div class="row">
					<div class="col-lg-12 pt-lg-5">

<!-- Slider main container -->
<div class="swiper swiper-hallfama">

	<!-- Additional required wrapper -->
	<div class="swiper-wrapper">

	  <!-- Slides -->
	  <div class="swiper-slide">
		  <div class="swiper-hallfama__item text-center">
			<figure>
				<a href="#">
					<img src="assets/img/hallfama/elymar-santos.jpg" class="img-fluid rounded-3 mb-2" alt="Elymar Santos">
				</a>
				<figcaption>
					<strong>Elymar Santos</strong>
				</figcaption>
			</figure>		

		  </div>
	  </div>


	  <!-- Slides -->
	  <div class="swiper-slide">
		<div class="swiper-hallfama__item text-center">
		  <figure>
			  <a href="#">
				  <img src="assets/img/hallfama/alcione.jpg" class="img-fluid rounded-3 mb-2" alt="Alcione">
			  </a>
			  <figcaption>
				  <strong>Alcione</strong>
			  </figcaption>
		  </figure>		

		</div>
	</div>


	<!-- Slides -->
	<div class="swiper-slide">
		<div class="swiper-hallfama__item text-center">
		  <figure>
			  <a href="#">
				  <img src="assets/img/hallfama/di-light.jpg" class="img-fluid rounded-3 mb-2" alt="Di Light">
			  </a>
			  <figcaption>
				  <strong>Di Light</strong>
			  </figcaption>
		  </figure>		

		</div>
	</div>


	<!-- Slides -->
	<div class="swiper-slide">
		<div class="swiper-hallfama__item text-center">
		  <figure>
			  <a href="#">
				  <img src="assets/img/hallfama/billy-paul.jpg" class="img-fluid rounded-3 mb-2" alt="Billy Paul">
			  </a>
			  <figcaption>
				  <strong>Billy Paul</strong>
			  </figcaption>
		  </figure>		

		</div>
	</div>



	</div>

	<!-- If we need pagination -->
	<!-- <div class="swiper-pagination swiper-pagination-hallfama"></div> -->

	<!-- If we need navigation buttons -->
	<div class="swiper-button-prev swiper-button-prev-hallfama"></div>
	<div class="swiper-button-next swiper-button-next-hallfama"></div>

	<!-- If we need scrollbar -->
	<!-- <div class="swiper-scrollbar"></div> -->
  </div>



						
					</div>
				</div>


	
			</div>
		</div>

	</section>
	<?php endif; ?>


	<?php if($area["gastronomia"]) : ?>
	<section class="gastronomia  pb-5" id="gastronomia">
		<header class="gastronomia__titulo text-center py-lg-5 py-4 mb-4 mb-lg-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12" data-animate="top" data-delay="3">
						<h2 class="text-warning">DIVERSÃO E GASTRONOMIA</h2>
						<p class="text-white fs-5 mb-0">em um só lugar</p>
					</div>
				</div>
			</div>
		</header>

		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 order-lg-2 mb-4 mb-lg-0" data-animate="right" data-delay="3">
					<p class="px-5 px-lg-0"><img src="assets/img/gastronomia-manhattan-cafe-theatro.png" class="img-fluid" alt="Diversão e Gastronomia"></p>
				</div>

				<div class="col-md-6 text-center text-md-start" data-animate="left" data-delay="1">
					<h3 class="gastronomia__texto mt-lg-5 mb-4">  <span class="d-inline-block cor-preto rounded-2 bg-warning py-2 px-3">NO MANHATTAN,</span> <br/>	<span class="text-warning">a nossa cozinha</span> <br /> <span class="d-inline-block text-white">também é show!</span></h3>
				</div>

			</div>
		</div>
	</section>

	<?php endif; ?>


	<?php if($area["contato"]) : ?>
		<section class="contato py-lg-5 py-4" id="contato" data-animate="top" data-delay="3">
			<div class="container">
				<div class="row gx-0">
					<div class="col-lg-5 order-lg-2">
						<header class="text-center  py-md-4 pt-4">
						<h2 class="text-white fs-1">ENTRE EM CONTATO</h2>
						<p class="text-warning">Respondemos com a maior brevidade</p>
					</header>


						
<form action="https://www.locawebsite.com/freeform.php" method="POST" class="contato__form p-md-5 p-4"  name="script_contato">
	<input type="hidden" name="titulo" value="">
	<input type="hidden" name="assunto" value="Fale Conosco - Manhattan Café Theatro">
	<input  type="hidden" name="redirect" value="back">
	<input type="hidden" name="charset" value="utf-8">
	<input type="hidden" name="to" value="contato@manhattanbar.com.br">
	
	<div class="row">
		<div class="col-md-12">
			<div class="form-group mb-4">
				<label  for="nome">Nome e Sobrenome:</label>
				<input type="text" name="nome" id="nome" class="form-control" required />
			</div><!-- form-group -->
		</div><!-- col-md-12 -->

		<div class="col-md-12">
			<div class="form-group mb-4">
				<label  for="nome">Telefone:</label>
				<input type="text" name="nome" id="nome" class="form-control" required />
			</div><!-- form-group -->
		</div><!-- col-md-12 -->
	
		<div class="col-md-12">
			<div class="form-group mb-4">
				<label  for="from">E-mail:</label>
				<input type="email" name='from' id="from" class="form-control" required />
			</div><!-- form-group -->
		</div><!-- col-md-12 -->
	
	
		<div class="col-md-12">
			<div class="form-group mb-4">
				<label  for="estados">Assunto:</label>
				<select name="assunto" id="assunto" class="form-control">
					
					<option value="">Selecione</option>

<option value="Trabalhe conosco">Trabalhe conosco </option>
<option value="Duvidas">Duvidas </option>
<option value="Sugestões">Sugestões </option>
<option value="Parceiros">Parceiros </option>
<option value="Contratações para show">Contratações para show </option>

					</select>
			</div><!-- form-group -->
		</div><!-- col-md-12 -->
	
		
		<div class="col-md-12">
			<div class="form-group mb-4">
				<label  for="mensagem">Sua Mensagem:</label>
				<textarea name="mensagem" class="form-control" id="mensagem" required rows="5"></textarea>
			</div><!-- form-group -->
		</div><!-- col-md-12 -->
	
						
						<div class="col-md-12">
							<div class="form-group mb-4">
							  <label for="termos-privacidade">
							  <input type="checkbox" name="termos-privacidade" id="termos-privacidade" required="">
							   Concordo com os <a href="termo-de-privacidade" target="_blank"><u>termos de privacidade</u></a></label>
							</div>
						</div>
				
						<div class="col-md-8">
			
						</div>
	
						<div class="col-md-4 text-end">
							<input type="submit" value="Enviar"  class="btn btn-secondary btn-lg" />
						</div>
					</div>
			</form>


					</div>
					<div class="col-lg-5 offset-lg-1 d-flex flex-column">
						<header class="text-center py-md-4 pt-4">
						<h2 class="text-white fs-1">COMO CHEGAR</h2>
						<address class="text-warning">Rua Francisco da Cunha, nº 881 - Boa Viagem, Recife </address>
					</header>


					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15799.570581782038!2d-34.8950107!3d-8.1124126!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1faf342d2843%3A0x83af10d8e5b62c2d!2sManhattan%20Caf%C3%A9%20Theatro!5e0!3m2!1spt-BR!2sbr!4v1692044815642!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>
	



	

</main>



<?php 
/* MENSAGEM DO FORM */ 
if(!empty($_GET['MSG'])){

  ?>
  <style type="text/css">
  .alertRetorno{
    position: fixed;
      top: 0;
      z-index: 9999999999;
      background: rgba(0,0,0,0.5);
      width: 100%;
      height: 100%;
  }

  .fundoRetorno{
      margin: auto;
      top: 40%;
      position: relative;
      text-align: center;
      background: #fff;
      max-width: 308px;
      padding: 45px;
      border-radius: 7px;
	  line-height: 20px;
  }

  .fechaalerta{
      position: absolute;
      top: 10px;
      right: 10px;
      cursor: pointer;
  }

</style>
<div class="alertRetorno" id="alertRetorno" onclick="document.getElementById('alertRetorno').style.display='none'">
  <div class="fundoRetorno" >
    <a class="fechaalerta text-decoration-none" onclick="document.getElementById('alertRetorno').style.display='none'">X</a>
    <span><svg fill="green" width="44" height="44" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12zm0 1c6.071 0 11 4.929 11 11s-4.929 11-11 11-11-4.929-11-11 4.929-11 11-11zm7 7.457l-9.005 9.565-4.995-5.865.761-.649 4.271 5.016 8.24-8.752.728.685z"/></svg> <br><br>	Sua mensagem foi enviada com sucesso!</span>
  </div>
</div>

<?php 

}
/* FIM MENSAGEM DO FORM */ 
?>


<?php 

include dirname(__FILE__). '/../includes/footer.php';

?>