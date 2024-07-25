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
                        <li><a href="all.php?page=1">Ver Todos</a></li>
                        <li><a href="painel.php">Voltar</a></li>
                        <li><a href="contact.php">Contato</a></li>
                    </ul>
                </nav>
        </header>

        <main>
            <form action="search.php?page=1" method="POST">
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