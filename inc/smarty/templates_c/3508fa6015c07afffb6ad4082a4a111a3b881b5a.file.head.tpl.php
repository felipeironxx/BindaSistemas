<?php /* Smarty version Smarty-3.1.13, created on 2023-01-20 08:46:32
         compiled from "view/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174088623163ca7f18a81553-40005752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3508fa6015c07afffb6ad4082a4a111a3b881b5a' => 
    array (
      0 => 'view/head.tpl',
      1 => 1674215110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174088623163ca7f18a81553-40005752',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_63ca7f18a8d119_20401266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63ca7f18a8d119_20401266')) {function content_63ca7f18a8d119_20401266($_smarty_tpl) {?><!DOCTYPE html>
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
            <div id="logout">Bem Vindo <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
 - <a href="logout.php">Sair</a></div>
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
            </div><?php }} ?>