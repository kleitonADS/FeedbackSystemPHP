<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-08-16 14:19:01
         compiled from "Views/list_feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199850683759563c614a4899-85037571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f788357558b34911d1f1981971ac60b1d7cca3d1' => 
    array (
      0 => 'Views/list_feedback.tpl',
      1 => 1502885909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199850683759563c614a4899-85037571',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59563c614d6bc0_90969746',
  'variables' => 
  array (
    'RegistroFeedback' => 0,
    'messagem' => 0,
    'ClassSearch' => 0,
    'TmessagemSearch' => 0,
    'NoTotalCheck' => 0,
    'TotalCheck' => 0,
    'TotalActive' => 0,
    'NoTotalActive' => 0,
    'ArrFeedback' => 0,
    'feedbacks' => 0,
    'intOffset' => 0,
    'tagSearch' => 0,
    'paramSearch' => 0,
    'quantPage' => 0,
    'page' => 0,
    'quantPag' => 0,
    'name' => 0,
    'email' => 0,
    'data' => 0,
    'desc_feedback' => 0,
    'check_feedback' => 0,
    'IdFeedback' => 0,
    'status' => 0,
    'searchStr' => 0,
    'searchparamStr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59563c614d6bc0_90969746')) {function content_59563c614d6bc0_90969746($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/feedbackphp/Framework/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html>
  <head>
    <title>FeedBack - List</title>
    <meta charset="utf-8"/ />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Views/css/bootstrap.css" />
    <link rel="stylesheet" href="Views/css/jqueryui.css" />
    <link rel="stylesheet" href="Views/css/main.css" />

    <link rel="shortcut icon" href="Views/img/iconfb.png">




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
        <div class="list-feedback">
          <?php $_smarty_tpl->tpl_vars['messagem'] = new Smarty_variable($_GET['Messagem'], null, 0);?>

          <?php if ($_smarty_tpl->tpl_vars['messagem']->value=='Feedback checked') {?>
          <div class="textalertsuccess alert alert-success greem" role="alert">
            <span class="glyphicon glyphicon-ok-circle aria-hidden="true""></span> <?php echo $_smarty_tpl->tpl_vars['messagem']->value;?>

          </div>


          <?php } elseif ($_smarty_tpl->tpl_vars['messagem']->value=="Feedback checked by search") {?>
          <div class="textalertsuccess alert alert-success greem" role="alert">
            <span class="glyphicon glyphicon-ok-circle aria-hidden="true""></span> <?php echo $_smarty_tpl->tpl_vars['messagem']->value;?>

          </div>

          <?php } elseif ($_smarty_tpl->tpl_vars['messagem']->value=="Feedback Unchecked") {?>
          <div class="textalertsuccess alert alert-success graym" role="alert">
            <span class="glyphicon glyphicon-ok-circle aria-hidden="true""></span> <?php echo $_smarty_tpl->tpl_vars['messagem']->value;?>

          </div>

          <?php } elseif ($_smarty_tpl->tpl_vars['messagem']->value=="Feedback disabled") {?>
          <div class="textalertsuccess alert alert-success bluem" role="alert">
            <span class="glyphicon glyphicon-ok-circle aria-hidden="true""></span> <?php echo $_smarty_tpl->tpl_vars['messagem']->value;?>

          </div>


          <?php } elseif ($_smarty_tpl->tpl_vars['messagem']->value=="Feedback deleted") {?>
          <div class="textalertsuccess alert alert-success redm" role="alert">
            <span class="glyphicon glyphicon-ok-circle aria-hidden="true""></span> <?php echo $_smarty_tpl->tpl_vars['messagem']->value;?>

          </div>

          <?php } elseif ($_smarty_tpl->tpl_vars['messagem']->value=="Field seach empty") {?>
          <div class="textalertsuccess alert alert-success alertfm" role="alert">
            <span class="glyphicon glyphicon-ok-circle aria-hidden="true""></span> <?php echo $_smarty_tpl->tpl_vars['messagem']->value;?>

          </div>



          <?php } else { ?>


          <div class="textalertsuccess <?php echo $_smarty_tpl->tpl_vars['ClassSearch']->value;?>
" role="alert">
            <span><?php echo $_smarty_tpl->tpl_vars['TmessagemSearch']->value;?>
</span>
          </div>
          <?php }?>

          <h2 class="form-signin-heading">
            <span class="badge greenb">Checked ( <?php echo $_smarty_tpl->tpl_vars['NoTotalCheck']->value;?>
 )</span>
            <span class="badge grayb">Not Checked ( <?php echo $_smarty_tpl->tpl_vars['TotalCheck']->value;?>
 )</span>
            <span class="badge orangeb">Active ( <?php echo $_smarty_tpl->tpl_vars['TotalActive']->value;?>
 )</span>
            <span class="badge redb">Disabled ( <?php echo $_smarty_tpl->tpl_vars['NoTotalActive']->value;?>
 )</span>
          </h2>

            <div class="panel panel-default">

              <div class="panel-heading">
                  <form id="formhome" method="post">
                <div class="input-group">



                <div class="input-group-btn search-panel">

                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    	<span id="search_concept">Filter by </span> <span class="caret"></span>
                    </button>
                    <ul class="listMenu dropdown-menu " role="menu" >
                      <li class="lName active"><a >Name</a></li>
                      <li class="lEmail"><a >Email</a></li>
                      <li class="lDate"><a >Date</a></li>
                      <li class="lCheck"><a >Check</a></li>
                      <li class="lNoCheck"><a >Not Check</a></li>
                      <li class="lActive"><a >Active</a></li>
                      <li class="lDisabled"><a >Disabled</a></li>
                    </ul>

                </div>



                <form id="formhome" method="post">
                <input type="hidden" name="search_param" value="nome" id="search_param" format>
                <input type="text" class="form-control" name="nameFeedback" placeholder="Search by name" id="inputSearch">
                <input type="text" class="form-control" name="#" placeholder="(mm/dd/YYYY)" id="datepicker">
                  <span class="input-group-btn">
                    <!-- <button type='submit' class=' btn btn-primary' formaction='?action=20&Messagem=' > Clear Search</button> -->
                    <button class="btn btn-default" type="submit" formaction="?action=50&Messagem=">

                      <span class="glyphicon glyphicon-search"></span>
                    </button>

                  </span>

                  <!-- <form  class="form-signin-heading" method='post' action='?action=20&Messagem='> -->
                     <!-- <button type='submit' class=' btn btn-default btn-sm' formaction='?action=20&Messagem=' > Clear Search list</button>
                  <!</form> -->
                </form>

            </div>

              </div>
              <div class="table-responsive">

              <table class="table">

                <thead>
                  <tr>
                    <th>
                      <form method="post" action="?action=20&Messagem=">
                        <button type='submit' class=' btn btn-primary btn-sm'  > Clear Search</button></th>
                      </form>

                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Feedback</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php  $_smarty_tpl->tpl_vars['feedbacks'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feedbacks']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ArrFeedback']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feedbacks']->key => $_smarty_tpl->tpl_vars['feedbacks']->value) {
$_smarty_tpl->tpl_vars['feedbacks']->_loop = true;
?>

                    <th scope="row">
                    <?php if ($_smarty_tpl->tpl_vars['feedbacks']->value['check_feedback']=="1") {?>
                      <a href="?action=32&id=<?php echo $_smarty_tpl->tpl_vars['feedbacks']->value['idfeedback'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['intOffset']->value;?>
&Messagem=&tagSearch=<?php echo rawurlencode($_smarty_tpl->tpl_vars['tagSearch']->value);?>
&param=<?php echo $_smarty_tpl->tpl_vars['paramSearch']->value;?>
" class="ok checkgreen " >
                        <span class="glyphicon glyphicon-ok" id="checkfeed"></span>

                      </a>
                    <?php } elseif ($_smarty_tpl->tpl_vars['feedbacks']->value['check_feedback']=="0") {?>
                    <a href="?action=32&id=<?php echo $_smarty_tpl->tpl_vars['feedbacks']->value['idfeedback'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['intOffset']->value;?>
&Messagem=&tagSearch=<?php echo rawurlencode($_smarty_tpl->tpl_vars['tagSearch']->value);?>
&param=<?php echo $_smarty_tpl->tpl_vars['paramSearch']->value;?>
" class="ok" >
                      <span class="glyphicon glyphicon-ok" id="checkfeed"></span>

                    </a>

                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['feedbacks']->value['status_feedback']=="0") {?>
                    <a href="?action=33&id=<?php echo $_smarty_tpl->tpl_vars['feedbacks']->value['idfeedback'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['intOffset']->value;?>
&Messagem=&tagSearch=<?php echo rawurlencode($_smarty_tpl->tpl_vars['tagSearch']->value);?>
&param=<?php echo $_smarty_tpl->tpl_vars['paramSearch']->value;?>
" class=" remove status">
                    <span class="glyphicon glyphicon-remove-circle"></span>

                    </a>
                    <?php } elseif ($_smarty_tpl->tpl_vars['feedbacks']->value['status_feedback']=="1") {?>
                    <a href="?action=33&id=<?php echo $_smarty_tpl->tpl_vars['feedbacks']->value['idfeedback'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['intOffset']->value;?>
&Messagem=&tagSearch=<?php echo rawurlencode($_smarty_tpl->tpl_vars['tagSearch']->value);?>
&param=<?php echo $_smarty_tpl->tpl_vars['paramSearch']->value;?>
" class="remove ">
                    <span class="glyphicon glyphicon-trash"></span>

                    </a>
                    <?php }?>

                    </th>
                    <td><?php echo $_smarty_tpl->tpl_vars['feedbacks']->value['nome'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['feedbacks']->value['email'];?>
</td>
                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['feedbacks']->value['data'],"%m/%d/%Y");?>
</td>
                    <td>
                      <!-- <a href="?action=40&id=<?php echo $_smarty_tpl->tpl_vars['feedbacks']->value['idfeedback'];?>
" class="view" > -->
                        <a href="?action=40&id=<?php echo $_smarty_tpl->tpl_vars['feedbacks']->value['idfeedback'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['intOffset']->value;?>
&Messagem=&tagSearch=<?php echo rawurlencode($_smarty_tpl->tpl_vars['tagSearch']->value);?>
&param=<?php echo $_smarty_tpl->tpl_vars['paramSearch']->value;?>
" data-toggle="modal" data-target="#myModal" class="view" id="getPag">
                        <span class="glyphicon glyphicon-zoom-in"></span>
                      </a>
                    </td>
                  </tr>

                  <?php } ?>
                </tbody>

              </table>

            </div>
          </div>
            <nav aria-label="..." class="pag-list">
              <?php if ($_smarty_tpl->tpl_vars['quantPage']->value<1) {?>

              <?php } elseif ($_smarty_tpl->tpl_vars['quantPage']->value>1) {?>
              <ul class="pagination">

                <?php if ($_smarty_tpl->tpl_vars['intOffset']->value>0) {?>
                <li class="">
                  <a href="?action=20&p=<?php echo $_smarty_tpl->tpl_vars['intOffset']->value-1;?>
&Messagem=&tagSearch=<?php echo $_smarty_tpl->tpl_vars['tagSearch']->value;?>
&param=<?php echo $_smarty_tpl->tpl_vars['paramSearch']->value;?>
" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                  </a>
                </li>
                <?php } elseif ($_smarty_tpl->tpl_vars['intOffset']->value<=0) {?>
                <li class="disabled">
                  <a href="?action=20&p=0&Messagem=&tagSearch=<?php echo $_smarty_tpl->tpl_vars['tagSearch']->value;?>
&param=<?php echo $_smarty_tpl->tpl_vars['paramSearch']->value;?>
" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                  </a>
                </li>
                <?php }?>

                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['quantPage']->value-1;?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_tmp1+1 - (0) : 0-($_tmp1)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = 0, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration == 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration == $_smarty_tpl->tpl_vars['page']->total;?>
                <?php if ($_smarty_tpl->tpl_vars['page']->value==$_smarty_tpl->tpl_vars['intOffset']->value) {?>
                <li class="active">
                <?php } elseif ($_smarty_tpl->tpl_vars['page']->value!=$_smarty_tpl->tpl_vars['intOffset']->value) {?>
                <li class="">
                <?php }?>
                  <a href="?action=20&p=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&Messagem=&tagSearch=<?php echo $_smarty_tpl->tpl_vars['tagSearch']->value;?>
&param=<?php echo $_smarty_tpl->tpl_vars['paramSearch']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
 <span class="sr-only">(current)</span>
                  </a>
                </li>
                <?php }} ?>


                <?php if ($_smarty_tpl->tpl_vars['intOffset']->value<=$_smarty_tpl->tpl_vars['quantPag']->value) {?>
                <li>
                  <a href="?action=20&p=<?php echo $_smarty_tpl->tpl_vars['intOffset']->value+1;?>
&Messagem=&tagSearch=<?php echo $_smarty_tpl->tpl_vars['tagSearch']->value;?>
&param=<?php echo $_smarty_tpl->tpl_vars['paramSearch']->value;?>
" aria-label="Next">
                    <span aria-hidden="true">»</span>
                  </a>
                </li>


                <?php } elseif ($_smarty_tpl->tpl_vars['intOffset']->value>$_smarty_tpl->tpl_vars['quantPag']->value) {?>
                <li class="disabled">
                  <a href="?action=20&p=<?php echo $_smarty_tpl->tpl_vars['quantPage']->value-1;?>
&Messagem=&tagSearch=<?php echo $_smarty_tpl->tpl_vars['tagSearch']->value;?>
&param=<?php echo $_smarty_tpl->tpl_vars['paramSearch']->value;?>
" aria-label="Next">
                    <span aria-hidden="true">»</span>
                  </a>
                </li>
                <?php }?>
              </ul>

              <?php }?>
            </nav>
        </div>



        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">

        <!-- <div class="logobuttons">

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
                    <input type="text" name="date" class="form-control input-regular form-control-regular" placeholder="Name" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value,"%d/%m/%Y");?>
" disabled>
                  <div class="form-group">
                    <textarea class="form-control input-regular form-control-regular" rows="6" id="feedback" placeholder="Feedback" for="desc_feedback" name="desc_feedback" disabled><?php echo $_smarty_tpl->tpl_vars['desc_feedback']->value;?>
</textarea>
                  </div>

                  <th scope="row">
                  <?php if ($_smarty_tpl->tpl_vars['check_feedback']->value=="1") {?>
                    <a href="?action=32&id=<?php echo $_smarty_tpl->tpl_vars['IdFeedback']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" class="ok checkgreen ">
                      <span class="glyphicon glyphicon-ok"></span>

                    </a>
                  <?php } elseif ($_smarty_tpl->tpl_vars['check_feedback']->value=="0") {?>
                  <a href="?action=32&id=<?php echo $_smarty_tpl->tpl_vars['IdFeedback']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" class="ok">
                    <span class="glyphicon glyphicon-ok"></span>

                  </a>

                  <?php }?>

                  <?php if ($_smarty_tpl->tpl_vars['status']->value=="0") {?>
                    <a href="?action=33&id=<?php echo $_smarty_tpl->tpl_vars['IdFeedback']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" class=" remove status">
                    <span class="glyphicon glyphicon-remove-circle"></span>

                    </a>
                  <?php } elseif ($_smarty_tpl->tpl_vars['status']->value=="1") {?>
                  <a href="?action=33&id=<?php echo $_smarty_tpl->tpl_vars['IdFeedback']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" class="remove ">
                  <span class="glyphicon glyphicon-trash"></span>

                  </a>
                  <?php }?>

                  </th>

                  <input type="hidden" name="searchStr" value="<?php echo $_smarty_tpl->tpl_vars['searchStr']->value;?>
" id="searchStr">
                  <input type="hidden" name="searchparamStr" value="<?php echo $_smarty_tpl->tpl_vars['searchparamStr']->value;?>
" id="searchparamStr">

                  </form>
                </br>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
              </div> -->
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
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
 src="Views/js/jquery-ui.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="Views/js/function.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
<?php echo '</script'; ?>
>


  </body>
</html>
<?php }} ?>
