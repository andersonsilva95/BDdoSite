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

</html>