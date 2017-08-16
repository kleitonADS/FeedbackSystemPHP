<!DOCTYPE html>
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
          <a href="?" class="navbar-brand"><span  class="glyphicon glyphicon-edit"></span> Feedback <span class="badge blueb"> {$RegistroFeedback}</span></a>

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
          {$messagem = $smarty.get.Messagem }

          {if $messagem == 'Feedback checked' }
          <div class="textalertsuccess alert alert-success greem" role="alert">
            <span class="glyphicon glyphicon-ok-circle aria-hidden="true""></span> {$messagem}
          </div>


          {elseif $messagem =="Feedback checked by search" }
          <div class="textalertsuccess alert alert-success greem" role="alert">
            <span class="glyphicon glyphicon-ok-circle aria-hidden="true""></span> {$messagem}
          </div>

          {elseif $messagem =="Feedback Unchecked" }
          <div class="textalertsuccess alert alert-success graym" role="alert">
            <span class="glyphicon glyphicon-ok-circle aria-hidden="true""></span> {$messagem}
          </div>

          {elseif $messagem =="Feedback disabled" }
          <div class="textalertsuccess alert alert-success bluem" role="alert">
            <span class="glyphicon glyphicon-ok-circle aria-hidden="true""></span> {$messagem}
          </div>


          {elseif $messagem =="Feedback deleted" }
          <div class="textalertsuccess alert alert-success redm" role="alert">
            <span class="glyphicon glyphicon-ok-circle aria-hidden="true""></span> {$messagem}
          </div>

          {elseif $messagem =="Field seach empty" }
          <div class="textalertsuccess alert alert-success alertfm" role="alert">
            <span class="glyphicon glyphicon-ok-circle aria-hidden="true""></span> {$messagem}
          </div>



          {else $messagem ==" "}


          <div class="textalertsuccess {$ClassSearch}" role="alert">
            <span>{$TmessagemSearch}</span>
          </div>
          {/if}

          <h2 class="form-signin-heading">
            <span class="badge greenb">Checked ( {$NoTotalCheck} )</span>
            <span class="badge grayb">Not Checked ( {$TotalCheck} )</span>
            <span class="badge orangeb">Active ( {$TotalActive} )</span>
            <span class="badge redb">Disabled ( {$NoTotalActive} )</span>
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
                    {foreach $ArrFeedback as $feedbacks}

                    <th scope="row">
                    {if $feedbacks.check_feedback == "1" }
                      <a href="?action=32&id={$feedbacks.idfeedback}&page={$intOffset}&Messagem=&tagSearch={$tagSearch|escape:'url'}&param={$paramSearch}" class="ok checkgreen " >
                        <span class="glyphicon glyphicon-ok" id="checkfeed"></span>

                      </a>
                    {elseif $feedbacks.check_feedback == "0"}
                    <a href="?action=32&id={$feedbacks.idfeedback}&page={$intOffset}&Messagem=&tagSearch={$tagSearch|escape:'url'}&param={$paramSearch}" class="ok" >
                      <span class="glyphicon glyphicon-ok" id="checkfeed"></span>

                    </a>

                    {/if}

                    {if $feedbacks.status_feedback == "0" }
                    <a href="?action=33&id={$feedbacks.idfeedback}&page={$intOffset}&Messagem=&tagSearch={$tagSearch|escape:'url'}&param={$paramSearch}" class=" remove status">
                    <span class="glyphicon glyphicon-remove-circle"></span>

                    </a>
                    {elseif $feedbacks.status_feedback == "1"}
                    <a href="?action=33&id={$feedbacks.idfeedback}&page={$intOffset}&Messagem=&tagSearch={$tagSearch|escape:'url'}&param={$paramSearch}" class="remove ">
                    <span class="glyphicon glyphicon-trash"></span>

                    </a>
                    {/if}

                    </th>
                    <td>{$feedbacks.nome}</td>
                    <td>{$feedbacks.email}</td>
                    <td>{$feedbacks.data|date_format:"%m/%d/%Y"}</td>
                    <td>
                      <!-- <a href="?action=40&id={$feedbacks.idfeedback}" class="view" > -->
                        <a href="?action=40&id={$feedbacks.idfeedback}&page={$intOffset}&Messagem=&tagSearch={$tagSearch|escape:'url'}&param={$paramSearch}" data-toggle="modal" data-target="#myModal" class="view" id="getPag">
                        <span class="glyphicon glyphicon-zoom-in"></span>
                      </a>
                    </td>
                  </tr>

                  {/foreach}
                </tbody>

              </table>

            </div>
          </div>
            <nav aria-label="..." class="pag-list">
              {if $quantPage < 1}

              {elseif $quantPage >1}
              <ul class="pagination">

                {if $intOffset > 0 }
                <li class="">
                  <a href="?action=20&p={$intOffset -1}&Messagem=&tagSearch={$tagSearch}&param={$paramSearch}" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                  </a>
                </li>
                {elseif $intOffset <= 0}
                <li class="disabled">
                  <a href="?action=20&p=0&Messagem=&tagSearch={$tagSearch}&param={$paramSearch}" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                  </a>
                </li>
                {/if}

                {for $page=0 to {$quantPage -1 }}
                {if $page == $intOffset}
                <li class="active">
                {elseif $page != $intOffset}
                <li class="">
                {/if}
                  <a href="?action=20&p={$page}&Messagem=&tagSearch={$tagSearch}&param={$paramSearch}">{$page +1} <span class="sr-only">(current)</span>
                  </a>
                </li>
                {/for}


                {if $intOffset <= $quantPag }
                <li>
                  <a href="?action=20&p={$intOffset +1}&Messagem=&tagSearch={$tagSearch}&param={$paramSearch}" aria-label="Next">
                    <span aria-hidden="true">»</span>
                  </a>
                </li>


                {elseif $intOffset > $quantPag }
                <li class="disabled">
                  <a href="?action=20&p={$quantPage-1}&Messagem=&tagSearch={$tagSearch}&param={$paramSearch}" aria-label="Next">
                    <span aria-hidden="true">»</span>
                  </a>
                </li>
                {/if}
              </ul>

              {/if}
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
                    <input type="text" name="name" class="form-control input-regular form-control-regular" placeholder="Name" value="{$name}" disabled>
                    <label for="email" class="sr-only">Email address</label>
                    <input type="email" name="email" id="inputEmail" class="form-control input-regular form-control-regular" placeholder="Email address" autofocus="" value="{$email}" disabled>
                    <label for="data" class="sr-only" >Date</label>
                    <input type="text" name="date" class="form-control input-regular form-control-regular" placeholder="Name" value="{$data|date_format:"%d/%m/%Y"}" disabled>
                  <div class="form-group">
                    <textarea class="form-control input-regular form-control-regular" rows="6" id="feedback" placeholder="Feedback" for="desc_feedback" name="desc_feedback" disabled>{$desc_feedback}</textarea>
                  </div>

                  <th scope="row">
                  {if $check_feedback == "1" }
                    <a href="?action=32&id={$IdFeedback}&page={$page}" class="ok checkgreen ">
                      <span class="glyphicon glyphicon-ok"></span>

                    </a>
                  {elseif $check_feedback == "0"}
                  <a href="?action=32&id={$IdFeedback}&page={$page}" class="ok">
                    <span class="glyphicon glyphicon-ok"></span>

                  </a>

                  {/if}

                  {if $status == "0" }
                    <a href="?action=33&id={$IdFeedback}&page={$page}" class=" remove status">
                    <span class="glyphicon glyphicon-remove-circle"></span>

                    </a>
                  {elseif $status == "1"}
                  <a href="?action=33&id={$IdFeedback}&page={$page}" class="remove ">
                  <span class="glyphicon glyphicon-trash"></span>

                  </a>
                  {/if}

                  </th>

                  <input type="hidden" name="searchStr" value="{$searchStr}" id="searchStr">
                  <input type="hidden" name="searchparamStr" value="{$searchparamStr}" id="searchparamStr">

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




  <script src="Views/js/jquery.js"></script>
  <script src="Views/js/bootstrap.js"></script>
  <script src="Views/js/jquery-ui.js"></script>
  <script src="Views/js/function.js"></script>

  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
</script>


  </body>
</html>
