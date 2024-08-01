<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <style>
        body{
            background: darkviolet;
            height: 100vh;
            display: flex;
            font-weight: bold;
            justify-content: center;
            align-items: center;
        }
    </style>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Acesso Restrito!</h3>
                        <form action="gestor/" method="POST">
                            <div class="mb-3">
                                <label>Usuário</label>
                                <input type="text" name="usuario" id="usuario" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Senha</label>
                                <input type="password" name="senha" id="senha" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-outline-success">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
