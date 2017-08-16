<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-07-22 20:28:05
         compiled from "Views/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185945981259563c5b69b158-66867920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69f9b5cb9fdd32437ecad998f7c7ecc50ff159cc' => 
    array (
      0 => 'Views/index.tpl',
      1 => 1500748082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185945981259563c5b69b158-66867920',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59563c5b70ae85_50727029',
  'variables' => 
  array (
    'classW' => 0,
    'IconMessagem_add' => 0,
    'Messagem_add' => 0,
    'RegistroFeedback' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59563c5b70ae85_50727029')) {function content_59563c5b70ae85_50727029($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>FeedBack Project</title>
    <meta charset="utf-8"/ />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Views/css/bootstrap.css" />
    <link rel="stylesheet" href="Views/css/main.css" />
    <link href="/favicon.ico" rel="icon">
  </head>

  <body>
    <div class="container">

        <div class="logobuttons">
          <div class="textalertsuccess <?php echo $_smarty_tpl->tpl_vars['classW']->value;?>
 greem " role="alert">
            <span class="<?php echo $_smarty_tpl->tpl_vars['IconMessagem_add']->value;?>
  aria-hidden="true"></span>  <?php echo $_smarty_tpl->tpl_vars['Messagem_add']->value;?>

          </div>
          <span  class="glyphicon glyphicon-edit logoHome"></span>
          <h1 class="titleLogo">Feedback
            <span class="badge blueb"> <?php echo $_smarty_tpl->tpl_vars['RegistroFeedback']->value;?>
 </span>
          </h1>

          <div class="mainbuttons" >
            <form id="formhome" method="post">
              <button class="btn buttonshome" type="submit" formaction="?action=10"  >
                <span  class="glyphicon glyphicon-plus-sign"></span>
                Add News
              </button>

              <button  class="btn buttonshome" type="submit" formaction="?action=20&Messagem=">
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
