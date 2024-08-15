<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Ateliê Aline Nacur</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="card-login">
            <div class="card">
                <div class="card-header">
                    Seja bem-vindo!
                </div>
                <div class="card-body">
                    <form action="valida_login.php" method="post">
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input name="senha" type="password" class="form-control" placeholder="Senha">
                        </div>
                        <?php if(isset($_GET['login']) && $_GET['login']=='erro') { ?>
                            <div class="text-danger">
                                Usuário ou senha inválido(s).
                            </div>
                        <?php } ?>
                        <?php if(isset($_GET['login']) && $_GET['login']=='erro2') { ?>
                            <div class="text-danger">
                                Faça login para acessar as páginas protegidas.
                            </div>
                        <?php } ?>
                        <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                        <br>
                        <div class="cria"> 
                        <p> Ainda não é cliente? </p>
                        <a id="cliente" href="crieconta.php"> Seja cliente! </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>