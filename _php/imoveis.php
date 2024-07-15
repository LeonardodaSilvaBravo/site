<?php
    $usuario = 'root';
    $senha = '';
    $database = 'imobiliaria';
    $host = 'localhost';
            
    $mysqli = new MYSQLI($host, $usuario, $senha, $database);
            
    if($mysqli->error) {
        die("Falha ao conectar ao banco de dados: " . $mysqli->error);
    }

    $sql_imoveis = "SELECT * FROM imoveis ORDER BY preco DESC";
    $resultado = $mysqli->query($sql_imoveis);
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
                        <li><a href="painel.php">Voltar</a></li>
                        <li><a href="contact.php">Contato</a></li>
                    </ul>
                </nav>
        </header>

        <main>
            <table border="1">
                <theard>
                    <td>Foto em Destaque</td>
                    <td>Descrição</td>
                    <td>Preço</td>
                    <td>Tem Piscina</td>
                    <td>Venda ou Locação</td>
                    <td>Número de Quartos</td>
                    <td>Número de Banheiros</td>
                    <td>Número de Suítes</td>
                </thead>
                <?php
                    while($sql_imoveis = mysqli_fetch_assoc($resultado)){
                    
                ?>
                
                <tbody>
                    <td><img height="100" width="100" src="<?php echo $sql_imoveis ['nome_foto1']; ?>" alt="Primeira foto da casa" class="lista"></td>
                    <td><p><?php echo $sql_imoveis ['descricao']; ?></p></td>
                    <td><p><?php echo $sql_imoveis ['preco']; ?></p></td>
                    <td><p><?php echo $sql_imoveis ['piscina']; ?></p></td>
                    <td><p><?php echo $sql_imoveis ['venda_loc']; ?></p></td>
                    <td><p><?php echo $sql_imoveis ['numero_quartos']; ?></p></td>
                    <td><p><?php echo $sql_imoveis ['numero_banheiros']; ?></p></td>
                    <td><p><?php echo $sql_imoveis ['numero_suites']; ?></p></td>
                </tbody>
                <?php } ?>
            </table>
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
    
</body>
</html>