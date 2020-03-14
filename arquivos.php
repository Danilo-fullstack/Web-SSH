<?php
    session_start();
    include('_php/functions.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web SSH</title>
    <link rel="stylesheet" href="_css/style.css?v=1.2">
    <link rel="stylesheet" href="_css/arquivos.css?v=1.2">
    <link rel="stylesheet" href="_css/reset.css?v=1.7">
    <link rel="stylesheet" href="_css/menu.css?v=2.2">
    <link rel="stylesheet" href="_css/btnMenu.css?v=2.2">
</head>
<body>
    <header class="cabecalho">
        <nav class="wrap-menu">
        <h1 class="title_logo"><a href="index.php" class="logo">Web <span>SSH</span></a></h1>
            <a href="#menu" class="btnMenu btnMenu_open">Menu</a>
            <ul id="menu" class="menu">
                <li class="btnMenu btnMenu_close">Sair</li>
                <li class="menu-item">
                    <a href="index.php" class="menu-item-action">Início</a>
                </li>
                <li class="menu-item">
                    <a href="tutoriais.php" class="menu-item-action">Tutoriais</a>
                </li>
                <li class="menu-item">
                    <a href="arquivos.php" class="menu-item-action">Arquivos</a>
                </li>
                <li class="menu-item">
                    <a href="apps.php" class="menu-item-action">Aplicativos</a>
                </li>
                <li class="menu-item">
                    <?php logarousair() ?>
                </li>
            </ul>
        </nav>
        <script src="_js/app.js"></script>
    </header>
    <section class="corpo">
        <div class="app-azul">
            <a href="./_download/aplicativo-azul-minha-vps.ehi" download="Aplicativo Azul.ehi"><img src="_img/http-injector.png" class="icons-app">
            <h4>Http Injector</h4></a>
        </div>
        <div class="app-branco">
                <a href="./_download/aplicativo-branco.ehil" download="Aplicativo Branco.ehil"><img src="_img/http-injector-lite.png" class="icons-app">
                <h4>Http Injector Lite</h4></a>
            </div>
    </section>
    <footer class="rodape">
        <div class="icons-rodape">
                <a href="https://t.me/DaniloWeb"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="telegram-plane" class="svg-inline--fa fa-telegram-plane fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="white" d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"></path></svg></a>

                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp" class="svg-inline--fa fa-whatsapp fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="white" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg>
        </div>
        <p>Copyright &copy; <?php echo date('Y');?> - by DaniloWeb</p>
    </footer>
</body>
</html>