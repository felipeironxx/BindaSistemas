<!DOCTYPE html>
<html>
    <head>
        <title>Servisos Web</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="view/css/inicio.css" media="screen"/>


        <!-- Coisas padrao do jancybox -->
        <script type="text/javascript" src="inc/fancybox/jquery-1.4.3.min.js"></script>
        <script type="text/javascript" src="inc/fancybox/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
        <link type="text/css" rel="stylesheet" href="inc/fancybox/fancybox/jquery.fancybox-1.3.4.css" media="screen"/>

        <!-- Nossa funca ao abrir a janela -->
        <script type="text/javascript" src="view/javascript/general.js"></script>
    </head>
    <body>
        <div id="corpo">
            <div id="logout">Bem Vindo {$usuario} - <a href="logout.php">Sair</a></div>
            <h1>Binda Sistemas</h1>
            <div id="menu">
                <ul>
                    <li><a class="menu" href="index.php"> Home</a></li>
                    <li><a class="menu" href="#"> Cadastros</a>
                        <ul>
                            <li><a class="menu" href="listEmpresa.php"> Cadastrar Empresa</a></li>
                            <li><a class="menu" href="listFuncionario.php"> Cadastrar Funcionario</a></li>
                            <li><a class="menu" href="listCliente.php"> Cadastrar Cliente</a></li>
                        </ul>
                    </li>
                    <li><a class="menu" href="listServico.php"> Serviços</a></li>
                    <!--<li><a class="menu" href="#"> Relatorios</a>
                        <ul>
                            <li><a class="menu" href="relServico.php">Serviços</a></li>
                        </ul>-->
                </ul>
            </div>