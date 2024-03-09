<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida_login.php" method="post"> <!--action -> levará para "valida_login", e o method"post", irá enviar os dados-->
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>

                <!--INÍCIO PHP - ERRO 1 (valida_login)-->
                <?php
                  if(isset($_GET["login"]) AND $_GET['login'] == 'erro'){ //Verificando se o índice LOGIN está SETADO(isset) e se ela tem o valor = erro 
                ?>
                  <div class="text-danger">
                    Usuário ou senha inválidos(s)
                  </div>
                <?php } ?>
                <!--FINAL PHP (o if fecha depois do primeiro php pra ele executar com os códigos HTML)-->

                <!--INÍCIO PHP - ERRO 2 (autenticação com $_SESSION)-->
                <?php
                  if(isset($_GET["login"]) AND $_GET['login'] == 'erro2'){ //Verificando se o índice LOGIN está SETADO(isset) e se ela tem o valor = erro2 
                ?>
                  <div class="text-danger">
                    Faça login antes de entrar nas páginas protegidas
                  </div>
                <?php } ?>
                <!--FINAL PHP (o if fecha depois do primeiro php pra ele executar com os códigos HTML)-->

                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>