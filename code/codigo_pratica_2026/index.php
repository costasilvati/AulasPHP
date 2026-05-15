<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Prova 1</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col bg-light">
                <h1>Prova 1 - Login</h1>
            </div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body p-3">
                        <form action="resposta.php" method="post">
                            <div class="mb-3">
                                <label for="user" class="form-label">Nome de usuário</label>
                                <input type="text" class="form-control" name="user">
                            </div>
                            <div class="mb-3">
                                <label for="user" class="form-label">Senha</label>
                                <input type="password" class="form-control" name="senha">
                            </div>
                            <input type="submit" value="Enviar" class="btn btn-primary">
                        </form>
                    </div>
                    
                </div>
            </div>
            <div class="col"></div>

        </div>
    </div>
    
</body>
</html>