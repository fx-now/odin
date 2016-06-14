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
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/favicon.png">

    <title><?= TAG_TITLE ?></title>

    <!-- Bootstrap -->
    <link href="temas/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="temas/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="temas/gentelella/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="">
              <h1>Acessar o sistema</h1>
              <div>
                <input type="text" class="form-control" placeholder="Usu&aacute;rio" required="" autofocus name="usuario" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="senha" />
              </div>
              <div>
                <input type="submit" class="btn btn-default submit" value="Acessar">
                <a class="reset_pass" href="#">Perdeu a senha?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link"> Novo no site?
                  <a href="#signup" class="to_register"> Crie uma conta! </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-gears"></i> odin</h1>
                  <p>&copy; <?= date("Y") ?> Alguns direitos reservados.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Criar uma conta</h1>
              <div>
                <input type="text" class="form-control" placeholder="Usu&uacute;rio" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="E-mail" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Senha" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Cadastrar!</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">J&aacute; &eacute; cadastrado?
                  <a href="#signin" class="to_register"> Acesse o sistema aqui </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-gears"></i> odin</h1>
                  <p>&copy; <?= date("Y") ?> Alguns direitos reservados.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
