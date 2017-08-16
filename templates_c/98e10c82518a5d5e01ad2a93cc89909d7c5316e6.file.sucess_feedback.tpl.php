<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-07-03 20:28:44
         compiled from "Views/sucess_feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:555724745595a8c686000c0-39718099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98e10c82518a5d5e01ad2a93cc89909d7c5316e6' => 
    array (
      0 => 'Views/sucess_feedback.tpl',
      1 => 1499106521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '555724745595a8c686000c0-39718099',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_595a8c6867fe40_21481078',
  'variables' => 
  array (
    'classW' => 0,
    'Messagem_add' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595a8c6867fe40_21481078')) {function content_595a8c6867fe40_21481078($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>FeedBack - Add new</title>
    <meta charset="utf-8"/ />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Views/css/bootstrap.css" />
    <link rel="stylesheet" href="Views/css/main.css" />
    <link href="/favicon.ico" rel="icon">
  </head>

  <body>
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-8" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <a href="?" class="navbar-link">
              <span  class="glyphicon glyphicon-home"></span>
            </a>

          </button>
          <a href="?" class="navbar-brand"><span  class="glyphicon glyphicon-edit"></span> Feedback</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-5">
          <p class="navbar-text navbar-right">

            <a href="?" class="navbar-link">
              <span  class="glyphicon glyphicon-home"></span>
            </a>
          </p>
        </div>
      </div>
    </nav>

    <div class="container">

        <div class="logobuttons">
          <div class="<?php echo $_smarty_tpl->tpl_vars['classW']->value;?>
" role="alert"><?php echo $_smarty_tpl->tpl_vars['Messagem_add']->value;?>
</div>
          <div class="mainbuttons" >
            <form id="formhome" method="post">
              <button class="btn buttonshome" type="submit" formaction="?action=10"  >
                <span  class="glyphicon glyphicon-plus-sign"></span>
                Add News
              </button>

              <button  class="btn buttonshome" type="submit" formaction="?action=20">
                <span  class="glyphicon glyphicon-list-alt"></span>
                List Depoiment
              </button>
          </form>
          </div>

       </div>

    </div>



  <?php echo '<script'; ?>
 src="Views/js/jquery.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="Views/js/bootstrap.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="Views/js/function.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }} ?>
