<?php
include("conexao.php");
if(isset($_POST['ref'])){
    if(strlen($_POST['ref']) == 0) {
        echo "Preencha a referência";
    } else {
        $ref = $mysqli->real_escape_string($_POST['ref']);
        $sql_code = "SELECT * FROM imoveis WHERE referencia = '$ref'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $usuario = $sql_query->fetch_assoc();

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

        $resultado = $mysqli->query($sql_code);     
    } else {
        echo "Falha ao buscar! Referência inexistente";
        header("Location: painel.php");
    }
}
}
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
                        <li><a href="buscar.php">Buscar</a></li>
                        <li><a href="all.php?page=1">Todos</a></li>
                        <li><a href="contact.php">Contato</a></li>
                    </ul>
                </nav>
        </header>

        <main>
                <?php
                    while($sql_imoveis = mysqli_fetch_assoc($resultado)){
                    
                ?>
            <h2><?php echo $sql_imoveis ['descricao']; ?></h2>

            <table border="1">
                    <theard>
                        <td>Referência</td>
                        <td>Endereço</td>
                        <td>Bairro</td>
                        <td>Área do Terreno</td>
                        <td>Área Construída</td>
                        <td>Preço</td>
                        <td>Tem Piscina</td>
                        <td>Casa para Venda ou Locação</td>
                        <td>Número de Quartos</td>
                        <td>Número de Banheiros</td>
                        <td>Número de Suítes</td>
                        <td>Tipo do Imóvel</td>
                    </thead>

                    <tbody>
                        <td><p><?php echo $sql_imoveis ['referencia']; ?></p></td>
                        <td><p><?php echo $sql_imoveis ['endereco']; ?></p></td>
                        <td><p><?php echo $sql_imoveis ['bairro']; ?></p></td>
                        <td><p><?php echo $sql_imoveis ['area_terreno']; ?></p></td>
                        <td><p><?php echo $sql_imoveis ['area_construida']; ?></p></td>
                        <td><p><span>R$</span><?php echo $sql_imoveis ['preco']; ?></p></td>
                        <td><p><?php echo $sql_imoveis ['piscina']; ?></p></td>
                        <td><p><?php echo $sql_imoveis ['venda_loc']; ?></p></td>
                        <td><p><?php echo $sql_imoveis ['numero_quartos']; ?></p></td>
                        <td><p><?php echo $sql_imoveis ['numero_banheiros']; ?></p></td>
                        <td><p><?php echo $sql_imoveis ['numero_suites']; ?></p></td>
                        <td><p><?php echo $sql_imoveis ['tipo']; ?></p></td>
                    </tbody>
            </table>
            <h3>Para ver melhor as imagens clique nelas.</h3>
            <table border="1">
                <theard>
                    <td></td>
                    <td></td>
                    <td>Fotos</td>
                    <td></td>
                    <td></td>
                </thead>
                
                
                    <tbody>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto1']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto1']; ?>" alt="Foto principal da casa" class="lista"></a></td>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto2']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto2']; ?>" alt="Segunda foto da casa" class="lista"></a></td>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto3']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto3']; ?>" alt="Terceira foto da casa" class="lista"></a></td>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto4']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto4']; ?>" alt="Quarta foto da casa" class="lista"></a></td>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto5']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto5']; ?>" alt="Quinta foto da casa" class="lista"></a></td>
                    </tbody>

                    <tbody>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto6']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto6']; ?>" alt="Sexta foto da casa" class="lista"></a></td>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto7']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto7']; ?>" alt="Sétima foto da casa" class="lista"></a></td>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto8']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto8']; ?>" alt="Oitava foto da casa" class="lista"></a></td>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto9']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto9']; ?>" alt="Nona foto da casa" class="lista"></a></td>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto10']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto10']; ?>" alt="Décima foto da casa" class="lista"></a></td>
                    </tbody>

                    <tbody>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto11']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto11']; ?>" alt="Décima Primeira foto da casa" class="lista"></a></td>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto12']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto12']; ?>" alt="Décima Segunda foto da casa" class="lista"></a></td>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto13']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto13']; ?>" alt="Décima Terceira foto da casa" class="lista"></a></td>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto14']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto14']; ?>" alt="Décima Quarta foto da casa" class="lista"></a></td>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto15']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto15']; ?>" alt="Décima Quinta foto da casa" class="lista"></a></td>
                    </tbody>

                    <tbody>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto16']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto16']; ?>" alt="Décima Sexta foto da casa" class="lista"></a></td>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto17']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto17']; ?>" alt="Décima Sétima foto da casa" class="lista"></a></td>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto18']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto18']; ?>" alt="Décima Oitava foto da casa" class="lista"></a></td>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto19']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto19']; ?>" alt="Décima Nona foto da casa" class="lista"></a></td>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto20']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto20']; ?>" alt="Vigésima foto da casa" class="lista"></a></td>
                    </tbody>

                    <tbody>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto21']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto21']; ?>" alt="Vigésima Primeira foto da casa" class="lista"></a></td>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto22']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto22']; ?>" alt="Vigésima Segunda foto da casa" class="lista"></a></td>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto23']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto23']; ?>" alt="Vigésima Terceira foto da casa" class="lista"></a></td>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto24']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto24']; ?>" alt="Vigésima Quarta foto da casa" class="lista"></a></td>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto25']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto25']; ?>" alt="Vigésima Quinta foto da casa" class="lista"></a></td>
                    </tbody>

                    <tbody>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto26']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto26']; ?>" alt="Vigésima Sexta foto da casa" class="lista"></a></td>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto27']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto27']; ?>" alt="Vigésima Sétima foto da casa" class="lista"></a></td>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto28']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto28']; ?>" alt="Vigésima Oitava foto da casa" class="lista"></a></td>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto29']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto29']; ?>" alt="Vigésima Nona foto da casa" class="lista"></a></td>
                        <td><a href="<?php echo $sql_imoveis ['nome_foto30']; ?>" target="_blank"><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto30']; ?>" alt="Trigésima foto da casa" class="lista"></a></td>
                    </tbody>
            </table>
                <?php } ?>
                <br>
                <a href="https://wa.me/+5513974094888" target="_blank" id="whatsapp">CONTINUE SEU ATENDIMENTO AQUI</a>
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
    
</body>
</html>