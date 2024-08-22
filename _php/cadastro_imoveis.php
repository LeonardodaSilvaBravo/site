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
            <div id="logotipo"><img src="../_imagens/logotipo-doliveira (3).png" alt="Logo Imobiliaria D'Oliveira" id="logo"></div>
            <br>
                <nav id="menu">
                    <h1>Menu</h1>
                    <ul>
                        <li><a href="../index.html">Home</a></li>
                        <li><a href="painel_admin.php">Voltar ao Painel</a></li>
                    </ul>
                </nav>
        </header>

        <main>
            <form enctype="multipart/form-data" action="cadastrar_imoveis.php" method="POST">
                <p>
                    <label>Endereço</label>
                    <input type="text" name="endereco">
                </p>
                <p>
                    <label>Referência</label>
                    <input type="text" name="ref">
                </p>
                <p>
                    <label>Área do terreno</label>
                    <input type="text" name="areaTer">
                </p>
                <p>
                    <label>Área Construída</label>
                    <input type="text" name="AC">
                </p>
                <p>
                    <label>Número de Quartos</label>
                    <input type="text" name="quartos">
                </p>
                <p>
                    <label>Número de Suítes</label>
                    <input type="text" name="suites">
                </p>
                <p>
                    <label>Número de Banheiros</label>
                    <input type="text" name="banheiros">
                </p>
                <p>
                    <label>Bairro</label>
                    <input type="text" name="bairo">
                </p>
                <p>
                    <label>Preço</label>
                    <input type="text" name="preco">
                </p>
                <p>
                    <label>Tipo de Imóvel</label> <br>
                    <input type="radio" name="tipo" value="Casa" id="tipo">Casa<br>
                    <input type="radio" name="tipo" value="Terreno" id="tipo">Terreno<br>
                    <input type="radio" name="tipo" value="Apartamento" id="tipo">Apartamento<br>
                </p>
                <p>
                    <label>Descrição</label>
                    <input type="text" name="desc">
                </p>
                <p>
                    <label>Venda ou Locação</label> <br>
                    <input type="radio" name="venda_ou_loc" value="Venda" id="venda">Venda <br>
                    <input type="radio" name="venda_ou_loc" value="Locaçao" id="locacao">Locação <br>
                </p>
                <p>
                    <label>Tem Piscina</label> <br>
                    <input type="radio" name="piscina" value="Sim" id="sim">Sim <br>
                    <input type="radio" name="piscina" value="Não" id="nao">Não <br>
                </p>
                <p>
                    <label>Foto 1</label>
                    <input type="file" name="foto1">
                </p>
                
                <p>
                    <label>Foto 2</label>
                    <input type="file" name="foto2">
                </p>
                <p>
                    <label>Foto 3</label>
                    <input type="file" name="foto3">
                </p>
                <p>
                    <label>Foto 4</label>
                    <input type="file" name="foto4">
                </p>
                <p>
                    <label>Foto 5</label>
                    <input type="file" name="foto5">
                </p>
                <p>
                    <label>Foto 6</label>
                    <input type="file" name="foto6">
                </p>
                <p>
                    <label>Foto 7</label>
                    <input type="file" name="foto7">
                </p>
                <p>
                    <label>Foto 8</label>
                    <input type="file" name="foto8">
                </p>
                <p>
                    <label>Foto 9</label>
                    <input type="file" name="foto9">
                </p>
                <p>
                    <label>Foto 10</label>
                    <input type="file" name="foto10">
                </p>
                <p>
                    <button type="submit">Cadastrar</button>
                </p>
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

        <p>Made by <a href="https://github.com/LeonardodaSilvaBravo" target="_blank" style="text-decoration: none; color: black;">D'Oliveira</a> | © 2024 All Rights Reserved</p>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>