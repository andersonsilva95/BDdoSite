<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--compratibilidade com outros navegadores-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela de Login</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
        <!-- BARRA DE NAVEGAÇÃO -->
 <div class="container">
  <div class="notification">
    <nav class="level">
  <p class="level-item has-text-centered">
    <a class="link is-info" href="index.php">Inicio</a>
  </p>
  <p class="level-item has-text-centered">
    <a class="link is-info" href="cadastro.php">Cadastro</a>
  </p>
  <!--<p class="level-item has-text-centered">
    <img src="https://bulma.io/images/bulma-type.png" alt="" style="height: 30px;">
  </p>-->
  <p class="level-item has-text-centered">
    <a class="link is-info" href="logar.php">Logar</a>
  </p>
  <p class="level-item has-text-centered">
    <a class="link is-info">Produtos</a>
  </p>
</nav>

    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Cadastro</h3>
                    <!-- <h3 class="title has-text-grey"><a href="https://youtube.com/canaltioficial" target="_blank">/a></h3> -->
                    <!-- <div class="notification is-danger"> -->
                      <!-- <p></p> -->
                    <!-- </div> -->
                    <div class="box">
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="Digite um usuário" autofocus="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="endereco" class="input is-large" placeholder="Digite um endereço de email" autofocus="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="endereco" class="input is-large" placeholder="Digite um endereço" autofocus="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="telefone" class="input is-large" placeholder="Digite seu telefone" autofocus="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>Site feito com recursos do framework</strong> <a href="https://bulma.io/"> Bulma</a>.
    </p>
  </div>
</footer>
</html>