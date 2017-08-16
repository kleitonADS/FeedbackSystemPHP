<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-30 13:36:46
         compiled from "Views/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:601838424594edf8d0a3ff8-62046088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd131c1da401a90e26d9432731f8f64944c282647' => 
    array (
      0 => 'Views/index.tpl',
      1 => 1498822188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '601838424594edf8d0a3ff8-62046088',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_594edf8d11cbe4_07746022',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594edf8d11cbe4_07746022')) {function content_594edf8d11cbe4_07746022($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>FeedBack Project</title>
    <meta charset="utf-8"/ />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Views/css/bootstrap.css" />
    <link rel="stylesheet" href="Views/css/main.css" />
  </head>

  <body>
    <div class="container">

        <div class="logobuttons">
          <span  class="glyphicon glyphicon-edit logoHome"></span>
          <h1 class="titleLogo">Feedback</h1>
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
