<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
                        <li><a href="contact.php">Contato</a></li>
                        <li><a href="../_html/search.html">Buscar Imóveis</a></li>
                        <li><a href="../_html/about_us.html">Quem Somos</a></li>
                    </ul>
                </nav>
        </header>

        <main>
            <form enctype="multipart/form-date" action="cadastrar_imoveis.php" method="POST">
                <p>
                    <label>Endereço</label>
                    <input type="text" name="endereco">
                </p>
                <p>
                    <label>Referência</label>
                    <input type="text" name="ref">
                </p>
                <p>
                    <label>Foto1</label>
                    <input type="file" name="foto1">
                </p>
                <p>
                    <label>Foto2</label>
                    <input type="file" name="foto2">
                </p>
                <p>
                    <label>Foto3</label>
                    <input type="file" name="foto3">
                </p>
                <p>
                    <label>Foto4</label>
                    <input type="file" name="foto4">
                </p>
                <p>
                    <label>Foto5</label>
                    <input type="file" name="foto5">
                </p>
                <p>
                    <label>Foto6</label>
                    <input type="file" name="foto6">
                </p>
                <p>
                    <label>Foto7</label>
                    <input type="file" name="foto7">
                </p>
                <p>
                    <label>Foto8</label>
                    <input type="file" name="foto8">
                </p>
                <p>
                    <label>Foto9</label>
                    <input type="file" name="foto9">
                </p>
                <p>
                    <label>Foto10</label>
                    <input type="file" name="foto10">
                </p>
                <p>
                    <label>Foto11</label>
                    <input type="file" name="foto11">
                </p>
                <p>
                    <label>Foto12</label>
                    <input type="file" name="foto12">
                </p>
                <p>
                    <label>Foto13</label>
                    <input type="file" name="foto13">
                </p>
                <p>
                    <label>Foto14</label>
                    <input type="file" name="foto14">
                </p>
                <p>
                    <label>Foto15</label>
                    <input type="file" name="foto15">
                </p>
                <p>
                    <label>Foto16</label>
                    <input type="file" name="foto16">
                </p>
                <p>
                    <label>Foto17</label>
                    <input type="file" name="foto17">
                </p>
                <p>
                    <label>foto18</label>
                    <input type="file" name="foto18">
                </p>
                <p>
                    <label>Foto19</label>
                    <input type="file" name="foto19">
                </p>
                <p>
                    <label>Foto20</label>
                    <input type="file" name="foto20">
                </p>
                <p>
                    <button type="submit">Cadastrar</button>
               
            </form>
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

        <p>Feito com ♥ pelo <a href="https://github.com/LeonardodaSilvaBravo" target="_blank">Leonardo</a></p>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>