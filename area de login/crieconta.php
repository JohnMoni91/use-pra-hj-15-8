<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ateliê Aline Nacur - Criar Conta</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card-login">
        <div class="card">
            <div class="card-header">
                Crie uma conta!
            </div>
            <div class="card-body">
                <form action="criandoconta.php" method="post">
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" placeholder="E-mail" required>
                    </div>
                    <div class="form-group">
                        <input name="senha" type="password" class="form-control" placeholder="Senha" required>
                    </div>
                    <div class="form-group">
                        <input name="confirmar-senha" type="password" class="form-control" placeholder="Confirmar senha" required>
                    </div>
                    <?php if (isset($_GET['erro']) && $_GET['erro'] == 'senha') { ?>
                        <div class="text-danger">
                            As senhas não coincidem.
                        </div>
                    <?php } ?>
                    <button class="btn btn-lg btn-info btn-block" type="submit">Criar!</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>