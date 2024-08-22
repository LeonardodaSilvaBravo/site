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
            <div id="logotipo"><img src="../_imagens/logotipo-doliveira (3).png" alt="Logo Imobiliaria D'Oliveira" id="logo"></div>
            <br>
                <nav id="menu">
                    <h1>Menu</h1>
                    <ul>
                        <li><a href="../index.html">Home</a></li>
                        <li><a href="all.php?page=1">Buscar Imóveis</a></li>
                        <li><a href="../_html/about_us.html">Quem Somos</a></li>
                    </ul>
                </nav>
        </header>

        <main>

          <div class="cont">
            <h2>Fale Conosco</h2>

            <form action="email.php" method="post">

              <input type="text" name="nome" placeholder="Digite seu nome completo">
              <br>

              <input type="email" name="email" placeholder="Digite seu e-mail">
              <br>

              <input type="tel" name="telefone" placeholder="Digite seu Whatsapp">
              <br>

              <textarea name="comentario" placeholder="Digite seu comentário/dúvida" id="comentario" cols="23" rows="7"></textarea>
              <br>

              <input type="submit" name="enviar" value="Enviar" id="enviar">
              
            </form>
          </div>
        </main>

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