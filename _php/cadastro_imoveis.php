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
                    <label>Tem Piscina</label>
                    <input type="radio" name="piscina" value="sim" id="sim">Sim
                    <input type="radio" name="piscina" value="nao" id="nao">Não
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
                    <label>Venda ou Locação</label>
                    <input type="radio" name="venda_ou_loc" value="venda" id="venda">Venda
                    <input type="radio" name="venda_ou_loc" value="locacao" id="venda">Locação
                </p>
                <p>
                    <label>Oportunidade</label>
                    <input type="text" name="oportunidade">
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
                    <label>Foto21</label>
                    <input type="file" name="foto21">
                </p>
                <p>
                    <label>Foto22</label>
                    <input type="file" name="foto22">
                </p>
                <p>
                    <label>Foto23</label>
                    <input type="file" name="foto23">
                </p>
                <p>
                    <label>Foto24</label>
                    <input type="file" name="foto24">
                </p>
                <p>
                    <label>Foto25</label>
                    <input type="file" name="foto25">
                </p>
                <p>
                    <label>Foto26</label>
                    <input type="file" name="foto26">
                </p>
                <p>
                    <label>Foto27</label>
                    <input type="file" name="foto27">
                </p>
                <p>
                    <label>Foto28</label>
                    <input type="file" name="foto28">
                </p>
                <p>
                    <label>Foto29</label>
                    <input type="file" name="foto29">
                </p>
                <p>
                    <label>Foto30</label>
                    <input type="file" name="foto30">
                </p>
                <p>
                    <label>Foto31</label>
                    <input type="file" name="foto31">
                </p>
                <p>
                    <label>Foto32</label>
                    <input type="file" name="foto32">
                </p>
                <p>
                    <label>Foto33</label>
                    <input type="file" name="foto33">
                </p>
                <p>
                    <label>Foto34</label>
                    <input type="file" name="foto34">
                </p>
                <p>
                    <label>Foto35</label>
                    <input type="file" name="foto35">
                </p>
                <p>
                    <label>Foto36</label>
                    <input type="file" name="foto36">
                </p>
                <p>
                    <label>Foto37</label>
                    <input type="file" name="foto37">
                </p>
                <p>
                    <label>Foto38</label>
                    <input type="file" name="foto38">
                </p>
                <p>
                    <label>Foto39</label>
                    <input type="file" name="foto39">
                </p>
                <p>
                    <label>Foto40</label>
                    <input type="file" name="foto40">
                </p>
                <p>
                    <label>Foto41</label>
                    <input type="file" name="foto41">
                </p>
                <p>
                    <label>Foto42</label>
                    <input type="file" name="foto42">
                </p>
                <p>
                    <label>Foto43</label>
                    <input type="file" name="foto43">
                </p>
                <p>
                    <label>Foto44</label>
                    <input type="file" name="foto44">
                </p>
                <p>
                    <label>Foto45</label>
                    <input type="file" name="foto45">
                </p>
                <p>
                    <label>Foto46</label>
                    <input type="file" name="foto46">
                </p>
                <p>
                    <label>Foto47</label>
                    <input type="file" name="foto47">
                </p>
                <p>
                    <label>Foto48</label>
                    <input type="file" name="foto48">
                </p>
                <p>
                    <label>Foto49</label>
                    <input type="file" name="foto49">
                </p>
                <p>
                    <label>Foto50</label>
                    <input type="file" name="foto50">
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