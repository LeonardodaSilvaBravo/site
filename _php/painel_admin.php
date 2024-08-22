<?php
    include('protect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/style.css"/>
    <link rel="shortcut icon" href="../_imagens/icone.png" type="image/x-icon">
    <script src="../_javascript/functions.js"></script>
    <title>D'Oliveira Imóveis</title>
</head>
<body>
    <div id="interface">
        <header id = "cabecalho">
            <br>
                <nav id="menu">
                    <h1>Menu</h1>
                    <ul>
                        <li><a href="logout.php">Sair</a></li>
                        <li><a href="alterar_imoveis.php">Alterar Imóveis</a></li>
                        <li><a href="excluir_admin.php">Excluir Admin</a></li>
                        <li><a href="cadastro_imoveis.php">Cadastrar Imóveis</a></li>
                        <li><a href="excluir_imovel.php">Excluir Imóveis</a></li>
                        <li><a href="escolher_imagens.php">Mais Imagens aos Imóveis</a></li>
                        <li><a href="cadastro_admin.php">Cadastrar Admin</a></li>
                    </ul>
                </nav>
        </header>

        <p>Bem vindo ao Painel, <?php echo $_SESSION['nome']; ?>.</p>

      <footer>
        <div id="social-links">
            <a href="https://www.facebook.com/doliveiraimoveisperuibe/" target="_blank">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a href="https://www.instagram.com/doliveiraimoveis/" target="_blank">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
            <a href="https://www.youtube.com/@DOliveiraImoveisPeruibe" target="_blank">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
            <a href="https://doliveiraimobiliaria@gmail.com" target="_blank">
              <ion-icon name="mail-outline"></ion-icon>
            </a>
            <a href="https://www.tiktok.com/@doliveiraimoveis" target="_blank">
              <ion-icon name="logo-tiktok"></ion-icon>
            </a>

        </div>

        <p>Made by <a href="https://github.com/LeonardodaSilvaBravo" target="_blank" style="text-decoration: none; color: black;">D'Oliveira</a> | © 2024 All Rights Reserved</p>
      </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>