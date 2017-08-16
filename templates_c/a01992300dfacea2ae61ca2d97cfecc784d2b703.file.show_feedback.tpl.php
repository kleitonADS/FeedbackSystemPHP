<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-08-15 15:39:34
         compiled from "Views/show_feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:948180118596a862243f318-05379774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a01992300dfacea2ae61ca2d97cfecc784d2b703' => 
    array (
      0 => 'Views/show_feedback.tpl',
      1 => 1502793654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '948180118596a862243f318-05379774',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_596a8622498083_88529589',
  'variables' => 
  array (
    'name' => 0,
    'email' => 0,
    'data' => 0,
    'desc_feedback' => 0,
    'check_feedback' => 0,
    'IdFeedback' => 0,
    'page' => 0,
    'searchStr' => 0,
    'searchparamStr' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596a8622498083_88529589')) {function content_596a8622498083_88529589($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/feedbackphp/Framework/smarty/plugins/modifier.date_format.php';
?><div class="logobuttons">

          <div class="" role="alert"></div>
          <form class="form-add " method="post" action="?action=30">
            <h2 class="form-signin-heading"><span class="glyphicon glyphicon-file"></span> Show feedback</h2>
            <label for="name" class="sr-only" >Name</label>
            <input type="text" name="name" class="form-control input-regular form-control-regular" placeholder="Name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" disabled>
            <label for="email" class="sr-only">Email address</label>
            <input type="email" name="email" id="inputEmail" class="form-control input-regular form-control-regular" placeholder="Email address" autofocus="" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" disabled>
            <label for="data" class="sr-only" >Date</label>
            <input type="text" name="date" class="form-control input-regular form-control-regular" placeholder="Name" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value,"%m/%d/%Y");?>
" disabled>
          <div class="form-group">
            <textarea class="form-control input-regular form-control-regular" rows="6" id="feedback" placeholder="Feedback" for="desc_feedback" name="desc_feedback" disabled><?php echo $_smarty_tpl->tpl_vars['desc_feedback']->value;?>
</textarea>
          </div>

          <th scope="row">
          <?php if ($_smarty_tpl->tpl_vars['check_feedback']->value=="1") {?>
            <a href="?action=32&id=<?php echo $_smarty_tpl->tpl_vars['IdFeedback']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&Messagem=&tagSearch=<?php echo rawurlencode($_smarty_tpl->tpl_vars['searchStr']->value);?>
&param=<?php echo $_smarty_tpl->tpl_vars['searchparamStr']->value;?>
" class="ok checkgreen ">
              <span class="glyphicon glyphicon-ok"></span>

            </a>
          <?php } elseif ($_smarty_tpl->tpl_vars['check_feedback']->value=="0") {?>
          <a href="?action=32&id=<?php echo $_smarty_tpl->tpl_vars['IdFeedback']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&Messagem=&tagSearch=<?php echo rawurlencode($_smarty_tpl->tpl_vars['searchStr']->value);?>
&param=<?php echo $_smarty_tpl->tpl_vars['searchparamStr']->value;?>
" class="ok">
            <span class="glyphicon glyphicon-ok"></span>

          </a>

          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['status']->value=="0") {?>
            <a href="?action=33&id=<?php echo $_smarty_tpl->tpl_vars['IdFeedback']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&Messagem=&tagSearch=<?php echo rawurlencode($_smarty_tpl->tpl_vars['searchStr']->value);?>
&param=<?php echo $_smarty_tpl->tpl_vars['searchparamStr']->value;?>
" class=" remove status">
            <span class="glyphicon glyphicon-remove-circle"></span>

            </a>
          <?php } elseif ($_smarty_tpl->tpl_vars['status']->value=="1") {?>
          <a href="?action=33&id=<?php echo $_smarty_tpl->tpl_vars['IdFeedback']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&Messagem=&tagSearch=<?php echo rawurlencode($_smarty_tpl->tpl_vars['searchStr']->value);?>
&param=<?php echo $_smarty_tpl->tpl_vars['searchparamStr']->value;?>
" class="remove ">
          <span class="glyphicon glyphicon-trash"></span>

          </a>
          <?php }?>

          </th>

          <input type="hidden" name="searchStr" value="<?php echo $_smarty_tpl->tpl_vars['searchStr']->value;?>
" id="searchStr">
          <input type="hidden" name="searchparamStr" value="<?php echo $_smarty_tpl->tpl_vars['searchparamStr']->value;?>
" id="searchparamStr">
          <input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" id="pageS">

          </form>
        </br>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
      </div>

      <?php echo '<script'; ?>
 src="Views/js/function.js"><?php echo '</script'; ?>
>
<?php }} ?>
