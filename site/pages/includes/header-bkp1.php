<?php
session_start();
include dirname(__FILE__). '/../../vars.php';
include dirname(__FILE__). '/../../helpers.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title_page; ?></title>

<?php if($_SERVER['SERVER_NAME']=="micro-2"): ?>
  <base href="http://micro-2:8080/manhattan/">
<?php else: ?>
  <base href="https://shoppingoutlet.com.br/demo/manhattan2/">
<?php endif; ?>

  <link rel="icon" type="image/png"  href="assets/img/favicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/main.css?v=4">
<!-- -->
</head>
<body  class="anime-scroll">

<div class="bg-topo text-center" data-animate="top" data-delay="1" id="home">
      <img src="assets/img/bg-topo.png" class="img-fluid" alt >
</div>
<!-- /.bg-topo -->


<header class="navegation" data-animate="top" data-delay="1">

<script>
  // fix menu position after load content
  window.addEventListener("DOMContentLoaded", (event) => {
    setTimeout(function() {
      const header = document.querySelector('.navegation');
      header.classList.remove('animate');
      header.removeAttribute('data-animate');
      header.removeAttribute('data-delay');
    }, 1000);
   
  });
</script>




<nav class="navbar navbar-expand-xl">
  <div class="container container--topo">
    <!-- <div class="d-block d-lg-none" style="width: 56px">
       <a href="#" class="btn btn-outline-secondary rounded-pill btn-sm mx-2 mt-3"><svg xmlns="http://www.w3.org/2000/svg" fill="#12b2a3" width="15" height="15" viewBox="0 0 24 24"><path d="M18 10v-4c0-3.313-2.687-6-6-6s-6 2.687-6 6v4h-3v14h18v-14h-3zm-5 7.723v2.277h-2v-2.277c-.595-.347-1-.984-1-1.723 0-1.104.896-2 2-2s2 .896 2 2c0 .738-.404 1.376-1 1.723zm-5-7.723v-4c0-2.206 1.794-4 4-4 2.205 0 4 1.794 4 4v4h-8z"></path></svg> </a>
    </div> -->

    <a class="navbar-brand" href="#home">

          <img src="assets/img/manhattan-cafe-theatro.png"  alt="Manhattan Café Theatro">
      
    </a>
    
    <button class="navbar-toggler botaoAbrir mt-1" type="button"  data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <svg fill="#fff" width="44" height="44" viewBox="0 0 24 24" stroke-miterlimit="2" xmlns="http://www.w3.org/2000/svg"><path d="m22 16.75c0-.414-.336-.75-.75-.75h-18.5c-.414 0-.75.336-.75.75s.336.75.75.75h18.5c.414 0 .75-.336.75-.75zm0-5c0-.414-.336-.75-.75-.75h-18.5c-.414 0-.75.336-.75.75s.336.75.75.75h18.5c.414 0 .75-.336.75-.75zm0-5c0-.414-.336-.75-.75-.75h-18.5c-.414 0-.75.336-.75.75s.336.75.75.75h18.5c.414 0 .75-.336.75-.75z" fill-rule="nonzero"></path></svg>
    </button>

    <div class="offcanvas offcanvas-start"  tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <span class="offcanvas-title" id="offcanvasNavbarLabel"><span style="visibility: hidden;">Offcanvas</span></span>
        <button type="button" class="btn-close botaoFechar" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link botaoFechar" aria-current="page" href="#home">Home</a>
          </li>                
                                                 
          <li class="nav-item">
            <a class="nav-link botaoFechar" href="#programacao">Programação</a>
          </li>
          <li class="nav-item">
            <a class="nav-link botaoFechar" href="#descontos">Descontos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link botaoFechar" href="#hall-fama">Hall da Fama</a>
          </li> 
          
          
           <li class="nav-item">
            <a class="nav-link botaoFechar" href="#gastronomia">Gastronomia</a>
          </li>



          <li class="nav-item">
            <a class="nav-link botaoFechar" href="javascript:;" data-bs-toggle="modal" data-bs-target="#imprensa">Imprensa</a>
          </li>

           <li class="nav-item">
            <a class="nav-link botaoFechar" href="#contato">Contato</a>
          </li>
                      

			<?php /*
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          */ ?>
        </ul>
      
      </div>
    </div>




  </div>
</nav>


		</header>
		<!-- /.navegation -->