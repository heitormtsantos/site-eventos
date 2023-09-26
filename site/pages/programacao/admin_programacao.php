<?php
// Processar o formulário quando for enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   include "conexao.php"; 


    
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $linkCompra = $_POST['link_compra'];

    
    $targetDirectory = "/img";  
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

            // Agora você pode inserir os dados no banco de dados
            $imagem_caminho = "$targetDirectory" . basename($_FILES["imagem"]["name"]);
            $sql = "INSERT INTO programacao (data, hora, imagem, link_compra) VALUES ('$data', '$hora', '$imagem_caminho', '$linkCompra')";
           
    }

    
}
}
?>
    
    <main class="main mb-0">
   
   
    <style>
        body {
            background-color: #222;
            color: white; 
            font-family: Arial, sans-serif; 
        }

        h2 {
            text-align: center; 
        }

        form {
            max-width: 400px;
            margin: 0 auto; 
            padding: 20px;
            border: 1px solid #333;
            border-radius: 5px;
            background-color: #111;
        }

        label, input, button {
            display: block;
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
        }

        input[type="date"], input[type="time"], input[type="text"] {
            padding: 10px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 3px;
            width: 100%;
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            background-color: #f0a500; 
        }

        button[type="submit"] {
            padding: 12px 20px;
            background-color: #f0a500; 
            color: black; 
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
            font-size: 18px; 
        }

        button[type="submit"]:hover {
            background-color: #ffcc00; 
        }

        /* Estilos para o popup */
        .popup-container {
            display: none;
            background-color: rgba(0, 0, 0, 0.7);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            justify-content: center;
            align-items: center;
            text-align: center;
            z-index: 999;
        }

        .popup {
            background-color: #333;
            color: white;
            padding: 20px;
            border-radius: 5px;
        }
    </style>

    <h2>Adicionar Programação</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <label>Data:</label>
        <input type="date" name="data" required>
        
        <label>Hora:</label>
        <input type="time" name="hora" required>
        
        <label>Imagem:</label>
        <input type="file" name="imagem" accept="image/*" required>

        <label>Link de Compra:</label>
        <input type="text" name="link_compra" required>

        <button type="submit" name="submit" id="submit">Adicionar Programação</button>
    </form>

    <!-- Popup de Mensagem -->
    <div class="popup-container" id="popupContainer">
        <div class="popup">
            <p id="popupMessage">Mensagem de sucesso ou erro aqui.</p>
            <button id="closePopup">Fechar</button>
        </div>
    </div>

    <script>
       
        function showPopup(message) {
            document.getElementById("popupMessage").textContent = message;
            document.getElementById("popupContainer").style.display = "flex";
        }

        
        document.getElementById("closePopup").addEventListener("click", function() {
            document.getElementById("popupContainer").style.display = "none";
        });

        
        document.getElementById("submitBtn").addEventListener("click", function(e) {
            e.preventDefault();

          
            var formData = new FormData(document.querySelector("form"));

            fetch("<?php echo $_SERVER['PHP_SELF']; ?>", {
                method: "POST",
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                showPopup(data); 
            })
            .catch(error => {
                showPopup("Ocorreu um erro ao enviar o formulário."); // Exibir erro genérico
            });
        });
    </script>
</body>
</html>
