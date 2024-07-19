<?php
    include('protect.php');
?>
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
                        <li><a href="painel_admin.php">Voltar ao Painel</a></li>
                    </ul>
                </nav>
        </header>

        <main>
            <form enctype="multipart/form-data" action="alteracao_imoveis.php" method="POST">
                <p>
                    <label>Referência Atual</label>
                    <input type="text" name="ref_atual">
                </p>
                <p>
                    <label>Endereço Novo</label>
                    <input type="text" name="endereco">
                </p>
                <p>
                    <label>Referência Nova</label>
                    <input type="text" name="ref_nova">
                </p>
                <p>
                    <label>Área do Terreno Novo</label>
                    <input type="text" name="areaTer">
                </p>
                <p>
                    <label>Área Construída Novo</label>
                    <input type="text" name="AC">
                </p>
                <p>
                    <label>Número de Quartos Novo</label>
                    <input type="text" name="quartos">
                </p>
                <p>
                    <label>Número de Suítes Novo</label>
                    <input type="text" name="suites">
                </p>
                <p>
                    <label>Número de Banheiros Novo</label>
                    <input type="text" name="banheiros">
                </p>
                <p>
                    <label>Bairro Novo</label>
                    <input type="text" name="bairo">
                </p>
                <p>
                    <label>Preço Novo</label>
                    <input type="text" name="preco">
                </p>
                <p>
                    <label>Oportunidade Nova</label>
                    <input type="text" name="oportunidade">
                </p>
                <p>
                    <label>Descrição Nova</label>
                    <input type="text" name="desc">
                </p>
                <p>
                    <label>Venda ou Locação Novo</label> <br>
                    <input type="radio" name="venda_ou_loc" value="Venda" id="venda">Venda <br>
                    <input type="radio" name="venda_ou_loc" value="Locaçao" id="venda">Locação <br>
                </p>
                <p>
                    <label>Tem Piscina Agora</label> <br>
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

        <p>Made by <a href="https://github.com/LeonardodaSilvaBravo" target="_blank" style="text-decoration: none; color: black;">Leonardo</a></p>    
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>