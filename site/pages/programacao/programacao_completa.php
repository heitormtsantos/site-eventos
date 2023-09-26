<?php
function montarCards($conexao)
{
    include "conexao.php";
    $sql = "SELECT data, hora, imagem, link_compra, titulo, descricao FROM programacao";
    $result = $conexao->query($sql);

    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data = date("d/m/Y", strtotime($row["data"]));
            $hora = $row["hora"];
            $imagem_data = $row["imagem"];
            $linkCompra = $row["link_compra"];
            $titulo = $row["titulo"];
            $descricao = $row["descricao"];
            ?>

            <div class="card mb-3 bg-dark text-white mb-4">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $imagem_data; ?>" class="img-fluid rounded-start w-100" alt="<?php echo $titulo; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body ps-lg-5">
                            <h5 class="card-title text-warning mb-4"><span class="text-secondary"><?php echo $data . ' / ' . $hora; ?></span> <br><?php echo $titulo; ?></h5>
                            <p class="card-text text-secondary"><?php echo $descricao; ?></p>
                            <a href="<?php echo $linkCompra; ?>" class="btn btn-outline-primary mb-2">COMPRAR</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        }
    } else {
        echo "Nenhum resultado encontrado.";
    }
}
?>
