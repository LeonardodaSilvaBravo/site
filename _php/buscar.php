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
                        <li><a href="all.php?page=1">Ver Todos</a></li>
                        <li><a href="contact.php">Contato</a></li>
                    </ul>
                </nav>
        </header>

        <main>
            <form action="search.php?page=1" method="POST">
                <h3>Para a busca funcionar corretamente todas os campos devem ser preenchidos, mesmo que com o número zero.</h3>
                <p>
                    <label>Área Mínima do terreno</label>
                    <input type="text" name="areaTer">
                </p>
                <p>
                    <label>Número Mínimo de Quartos</label>
                    <input type="text" name="quartos">
                </p>
                <p>
                    <label>Número Mínimo de Suítes</label>
                    <input type="text" name="suites">
                </p>
                <p>
                    <label>Número Mínimo de Banheiros</label>
                    <input type="text" name="banheiros">
                </p>
                <p>
                    <label>Valor Máximo</label>
                    <input type="text" name="precoMaior">
                </p>
                <p>
                    <label>Valor Mínimo</label>
                    <input type="text" name="precoMenor">
                </p>
                <p>
                    <label>Tipo de Imóvel</label> <br>
                    <input type="radio" name="tipo" value="Casa" id="tipo">Casa<br>
                    <input type="radio" name="tipo" value="Terreno" id="tipo">Terreno<br>
                    <input type="radio" name="tipo" value="Casa" id="tipo">Apartamento<br>
                </p>
                <p>
                    <label>Venda ou Locação</label> <br>
                    <input type="radio" name="venda_ou_loc" value="Venda" id="venda">Venda <br>
                    <input type="radio" name="venda_ou_loc" value="Locaçao" id="venda">Locação <br>
                </p>
                <p>
                    <label>Tem Piscina</label> <br>
                    <input type="radio" name="piscina" value="Sim" id="sim">Sim <br>
                    <input type="radio" name="piscina" value="Não" id="nao">Não <br>
                </p>
                <p>
                    <button type="submit">Buscar</button>
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