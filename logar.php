<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<nav class="navbar is-transparent">
  <div class="navbar-brand">
    <a class="navbar-item" href="index.php">
      <img src="https://media2.giphy.com/media/VD6b0RgwT5sEo/giphy.gif?cid=790b76115d1701c049622f79493f8262&rid=giphy.gif" alt="Bulma: a modern CSS framework based on Flexbox" width="60" >
    </a>
    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="index.php">
        Inicio
      </a>
      <a class="navbar-item" href="cadastro.php">
        Cadastro
      </a>
      <a class="navbar-item" href="logar.php">
        Logar
      </a>
      
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="field is-grouped">
          <p class="control">
       
         
        </div>
      </div>
    </div>
  </div>
</nav>

<!-- SEÇÃO DE CADASTRO -->
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Login</h3>
                    
                    
                    <div class="box">
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
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