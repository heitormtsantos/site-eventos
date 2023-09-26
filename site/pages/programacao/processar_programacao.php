<?php

include "conexao.php";


$data = $_POST['data'];
$hora = $_POST['hora'];
$linkCompra = $_POST['link_compra'];


$targetDirectory = "assets/img/programacao/";
$targetFile = $targetDirectory . basename($_FILES["imagem"]["name"]);


$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imagem"]["tmp_name"]);
    if ($check !== false) {
        echo "Arquivo é uma imagem - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "Arquivo não é uma imagem.<br>";
        $uploadOk = 0;
    }
}


if (file_exists($targetFile)) {
    echo "Desculpe, o arquivo já existe.<br>";
    $uploadOk = 0;
}


if ($_FILES["imagem"]["size"] > 5000000) {
    echo "Desculpe, o arquivo é muito grande (limite de 5MB).<br>";
    $uploadOk = 0;
}


if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
    echo "Desculpe, apenas arquivos JPG, JPEG, PNG e GIF são permitidos.<br>";
    $uploadOk = 0;
}


if ($uploadOk == 0) {
    echo "Desculpe, o upload não foi bem-sucedido.<br>";
} else {
    if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $targetFile)) {
        echo "O arquivo " . htmlspecialchars(basename($_FILES["imagem"]["name"])) . " foi enviado com sucesso.<br>";

      
        $sql = "INSERT INTO programacao (data, hora, imagem, link_compra) VALUES ('$data', '$hora', '$targetFile', '$linkCompra')";
        if ($conexao->query($sql) === TRUE) {
            echo "Registro inserido com sucesso no banco de dados.";
        } else {
            echo "Erro ao inserir registro no banco de dados: " . $conexao->error;
        }
    } else {
        echo "Desculpe, houve um erro ao fazer o upload do arquivo.<br>";
    }
}


$conexao->close();
?>
