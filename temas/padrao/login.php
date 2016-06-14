<?
//faz o login
if($_POST["usuario"] != ""){
	$usuario = str($_POST["usuario"]);
	$senha = hash('sha512',str($_POST["senha"]));
	login($usuario, $senha, "?home");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title><?= TAG_TITLE ?></title>

    <!-- Bootstrap core CSS -->
    <link href="inc/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="inc/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="temas/padrao/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="inc/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="inc/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="inc/html5shiv.min.js"></script>
      <script src="inc/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Acessar o <?= NOME_SISTEMA ?></h2>
        <label for="inputEmail" class="sr-only">Usu&aacute;rio</label>
        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usu&aacute;rio" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Acessar">
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="inc/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

