<!DOCTYPE html>
<html>
  <head>
    <title>FeedBack Project</title>
    <meta charset="utf-8"/ />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Views/css/bootstrap.css" />
    <link rel="stylesheet" href="Views/css/main.css" />
    <link rel="shortcut icon" href="Views/img/iconfb.png">
  </head>

  <body>
    <div class="container">

        <div class="logobuttons">
          <div class="textalertsuccess {$classW} greem " role="alert">
            <span class="{$IconMessagem_add}  aria-hidden="true"></span>  {$Messagem_add}
          </div>
          <span  class="glyphicon glyphicon-edit logoHome"></span>
          <h1 class="titleLogo">Feedback
            <span class="badge blueb"> {$RegistroFeedback} </span>
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



  <script src="Views/js/jquery.js"></script>
  <script src="Views/js/bootstrap.js"></script>
  <script src="Views/js/function.js"></script>
  </body>
</html>
