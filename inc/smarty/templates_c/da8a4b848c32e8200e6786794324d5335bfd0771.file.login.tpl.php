<?php /* Smarty version Smarty-3.1.13, created on 2023-01-20 08:46:28
         compiled from "view/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101528346763ca7f14439db5-36784686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da8a4b848c32e8200e6786794324d5335bfd0771' => 
    array (
      0 => 'view/login.tpl',
      1 => 1674215111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101528346763ca7f14439db5-36784686',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'erro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_63ca7f1444a6b8_32935270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63ca7f1444a6b8_32935270')) {function content_63ca7f1444a6b8_32935270($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>Servisos Web</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="view/css/inicio.css" media="screen"/>
    </head>
    <body onload="document.login.login.focus()">
        <div id="corpo" align="center">
            <h1>Login</h1>
            <form name="login" method="post">
                <span class="text-error"><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</span><br>
                Login:
                <input name="login" type="text" id="login"><br> 
                Senha:
                <input name="senha" type="password" id="senha"><br><br>
                <input name="entrar" type="submit" id="entrar" value="Entrar"> 
            </form>
        </div>
    </body>
</html><?php }} ?>