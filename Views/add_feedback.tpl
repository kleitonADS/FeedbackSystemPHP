<!DOCTYPE html>
<html>
  <head>
    <title>FeedBack - Add new</title>
    <meta charset="utf-8"/ />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Views/css/bootstrap.css" />
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
          <a href="?" class="navbar-brand"><span  class="glyphicon glyphicon-edit"></span> Feedback <span class="badge blueb"> {$RegistroFeedback} </span></a>
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
          <div class="{$classW}" role="alert">{$Messagem_add}</div>
          <form class="form-add" method="post" action="?action=30">
            <h2 class="form-signin-heading"><span  class="glyphicon glyphicon-file"></span> New feedback</h2>
            <label for="name"class="sr-only">Name</label>
            <input type="text"  name="name"class="form-control input-regular form-control-regular" placeholder="Name" value="{$name}" >
            <label for="email" class="sr-only">Email address</label>
            <input type="email" name="email" id="inputEmail" class="form-control input-regular form-control-regular" placeholder="Email address"  autofocus="" value="{$email}">
          <div class="form-group">
            <textarea class="form-control input-regular form-control-regular" rows="6" id="feedback" placeholder=
              "Feedback" for="desc_feedback" name="desc_feedback"
            />{$desc}</textarea>
          </div>
          <button class="btn btn-lg buttonsadd btn-block" type="submit">Register</button>
          </form>
      </div>

    </div>



  <script src="Views/js/jquery.js"></script>
  <script src="Views/js/bootstrap.js"></script>
  <script src="Views/js/function.js"></script>
  </body>
</html>
