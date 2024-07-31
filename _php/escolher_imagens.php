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
            <form enctype="multipart/form-data" action="adcionar_imagens.php" method="POST">
                <p>
                    <label>Referência</label>
                    <input type="text" name="ref">
                </p>
                <p>
                    <label>Foto 11</label>
                    <input type="file" name="foto11">
                </p>
                <p>
                    <label>Foto 12</label>
                    <input type="file" name="foto12">
                </p>
                <p>
                    <label>Foto 13</label>
                    <input type="file" name="foto13">
                </p>
                <p>
                    <label>Foto 14</label>
                    <input type="file" name="foto14">
                </p>
                <p>
                    <label>Foto 15</label>
                    <input type="file" name="foto15">
                </p>
                <p>
                    <label>Foto 16</label>
                    <input type="file" name="foto16">
                </p>
                <p>
                    <label>Foto 17</label>
                    <input type="file" name="foto17">
                </p>
                <p>
                    <label>foto 18</label>
                    <input type="file" name="foto18">
                </p>
                <p>
                    <label>Foto 19</label>
                    <input type="file" name="foto19">
                </p>
                <p>
                    <label>Foto 20</label>
                    <input type="file" name="foto20">
                </p>
                <p>
                    <label>Foto 21</label>
                    <input type="file" name="foto21">
                </p>
                <p>
                    <label>Foto 22</label>
                    <input type="file" name="foto22">
                </p>
                <p>
                    <label>Foto 23</label>
                    <input type="file" name="foto23">
                </p>
                <p>
                    <label>Foto 24</label>
                    <input type="file" name="foto24">
                </p>
                <p>
                    <label>Foto 25</label>
                    <input type="file" name="foto25">
                </p>
                <p>
                    <label>Foto 26</label>
                    <input type="file" name="foto26">
                </p>
                <p>
                    <label>Foto 27</label>
                    <input type="file" name="foto27">
                </p>
                <p>
                    <label>Foto 28</label>
                    <input type="file" name="foto28">
                </p>
                <p>
                    <label>Foto 29</label>
                    <input type="file" name="foto29">
                </p>
                <p>
                    <label>Foto 30</label>
                    <input type="file" name="foto30">
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

        <p>Made by <a href="https://github.com/LeonardodaSilvaBravo" target="_blank" style="text-decoration: none; color: black;">Leonardo</a> | © 2024 All Rights Reserved</p>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>