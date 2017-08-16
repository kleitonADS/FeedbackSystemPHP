<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-07-22 20:35:46
         compiled from "Views/add_feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106568254459563c5f7ca201-96027636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5ad35567aee1f3c6c782226d5f5a5a8f64b03b5' => 
    array (
      0 => 'Views/add_feedback.tpl',
      1 => 1500748519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106568254459563c5f7ca201-96027636',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59563c5f7fe131_10105743',
  'variables' => 
  array (
    'RegistroFeedback' => 0,
    'classW' => 0,
    'Messagem_add' => 0,
    'name' => 0,
    'email' => 0,
    'desc' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59563c5f7fe131_10105743')) {function content_59563c5f7fe131_10105743($_smarty_tpl) {?><!DOCTYPE html>
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
          <a href="?" class="navbar-brand"><span  class="glyphicon glyphicon-edit"></span> Feedback <span class="badge blueb"> <?php echo $_smarty_tpl->tpl_vars['RegistroFeedback']->value;?>
 </span></a>
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
          <form class="form-add" method="post" action="?action=30">
            <h2 class="form-signin-heading"><span  class="glyphicon glyphicon-file"></span> New feedback</h2>
            <label for="name"class="sr-only">Name</label>
            <input type="text"  name="name"class="form-control input-regular form-control-regular" placeholder="Name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" >
            <label for="email" class="sr-only">Email address</label>
            <input type="email" name="email" id="inputEmail" class="form-control input-regular form-control-regular" placeholder="Email address"  autofocus="" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
          <div class="form-group">
            <textarea class="form-control input-regular form-control-regular" rows="6" id="feedback" placeholder=
              "Feedback" for="desc_feedback" name="desc_feedback"
            /><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</textarea>
          </div>
          <button class="btn btn-lg buttonsadd btn-block" type="submit">Register</button>
          </form>
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
