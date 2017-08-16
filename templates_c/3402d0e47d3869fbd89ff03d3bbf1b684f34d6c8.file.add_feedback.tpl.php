<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-30 13:42:55
         compiled from "Views/add_feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1716705054595637d0557493-61351672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3402d0e47d3869fbd89ff03d3bbf1b684f34d6c8' => 
    array (
      0 => 'Views/add_feedback.tpl',
      1 => 1498822944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1716705054595637d0557493-61351672',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_595637d0591512_62440054',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595637d0591512_62440054')) {function content_595637d0591512_62440054($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>FeedBack - Add new</title>
    <meta charset="utf-8"/ />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Views/css/bootstrap.css" />
    <link rel="stylesheet" href="Views/css/main.css" />
  </head>

  <body>
    <div class="container">
      <h1>Add new</h1>
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
