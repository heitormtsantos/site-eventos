<?php

include "conexao.php";


$sql = "SELECT data, hora, imagem, link_compra FROM programacao";
$stmt = $conn->prepare($sql);
$stmt->execute();

$slidesHTML = '';

if ($stmt->rowCount() > 0) {
   
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $data = date("d/m/Y", strtotime($row["data"]));
        $hora = $row["hora"];
        $imagem_data = $row["imagem"];
        $linkCompra = $row["link_compra"];
      
      
        $slide = '
            <div class="swiper-slide">
                <div class="swiper-programacao__item px-4 px-md-0 text-center">
                    <h3><span class="text-warning">' . $data . ' -</span> <span class="text-white">SEXTA</span> <br /> <span class="programacao__hora"><span class="text-white">A partir das</span> <span class="text-warning">' . $hora . '</span></span></h3>
                    <a href="' . $linkCompra . '">
                    <img src="'. $imagem_data .'" class="img-fluid rounded-3 border border-dark mb-2" alt="">

                    </a>
                    <a href="' . $linkCompra . '" class="btn btn-outline-primary btn-lg w-100 mb-2">COMPRAR</a>
                    <a href="#" data-titulo="Show no Manhattan: Pré São João - 13 MAI - SEXTA" data-desc="Show no Manhattan: Pré São João - 13 MAI - SEXTA n\n Show no Manhattan: Pré São João - 13 MAI - SEXTA // Atrações: Conde, Kelvis e The Rossi. // Mais informações:" data-link="' . $linkCompra . '" class="botaoCompartilhar text-white text-decoration-none" ><img src="assets/img/icon-share.png" width="20" class="me-1" alt> Compartilhe com um amigo</a>
                </div>
            </div>
        ';

        
        $slidesHTML .= $slide;
    }
}



?>
<!DOCTYPE html>
<html>
<head>
    <title>Slides Dinâmicos</title>
</head>
<body>

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php echo $slidesHTML; ?>
        </div>
    </div>
</body>
</html>