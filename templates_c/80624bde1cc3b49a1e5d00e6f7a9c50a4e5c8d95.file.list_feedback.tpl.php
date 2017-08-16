<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-30 13:43:15
         compiled from "Views/list_feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:525999549595638e85803e9-63074024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80624bde1cc3b49a1e5d00e6f7a9c50a4e5c8d95' => 
    array (
      0 => 'Views/list_feedback.tpl',
      1 => 1498822992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '525999549595638e85803e9-63074024',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_595638e85b94f9_09941174',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595638e85b94f9_09941174')) {function content_595638e85b94f9_09941174($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>FeedBack - List</title>
    <meta charset="utf-8"/ />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Views/css/bootstrap.css" />
    <link rel="stylesheet" href="Views/css/main.css" />
  </head>

  <body>
    <div class="container">
      <h1>List feedback</h1>
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
