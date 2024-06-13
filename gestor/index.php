<?php include "./../conexao.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Gestor</title>
</head>
<body class="container">
<div class="jumbotron text-center">
        <h1>Cadastro de Gestor</h1>
    </div>
    <?php
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        
        if(!empty($dados['SendForm'])){
            // var_dump($dados);

            $query_sql = "INSERT INTO users (nome, telefone, email, senha, nivel) 
            VALUES(:nome, :telefone, :email, :senha, :nivel)";

            $query_stm = $conn->prepare($query_sql);

            $query_stm->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $query_stm->bindParam(':telefone', $dados['telefone'], PDO::PARAM_STR);
            $query_stm->bindParam(':email', $dados['email'], PDO::PARAM_STR);

            $senha_cript = password_hash($dados['senha'], PASSWORD_DEFAULT);
            $query_stm->bindParam(':senha', $senha_cript);
            //$query_stm->bindParam(':senha', $dados['senha'], PDO::PARAM_STR);

            $query_stm->bindParam(':nivel', $dados['nivel'], PDO::PARAM_STR);

            $query_stm->execute();

            if($query_stm->rowCount()){
                echo "Cadastrado com sucesso";
            }else{
                echo "Sistema indisponivel entrar em contato 62 98592-1140";
            }

        }
    ?>
    <form method="POST" action="">
        <div class="row">
            <div class="col">
                <label for="">Nome</label>
                <input type="text" name="nome" class="form-control">
            </div>
            <div class="col-md-2">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="col-md-2">
                <label for="senha">Senha</label>
                <input type="password" name="senha" class="form-control">
            </div>
            <div class="col-md-2">
                <label for="">Telefone</label>
                <input type="text" name="telefone" class="form-control">
            </div>
            <div class="col-md-2">
                <label for="">Nivel</label>
                <select class="form-control" name="nivel">
                    <option disabled>Selecionar</option>
                    <option value="admin">Admin</option>
                    <option value="padrão">Padrão</option>
                </select>
            </div>
        </div>
        <input type="submit" value="Cadastrar" name="SendForm" class="btn btn-outline-primary mt-3">
        <?php
            print "<a href='logout.php' class='btn btn-outline-danger mt-3'>Sair</a>"
        ?>
    </form>
    <table class="table striped mt-5">
        <thead>
            <tr>
                <th width="50">Código</th>
                <th width="200">Nome</th>
                <th width="250">Email</th>
                <th width="150">Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>01</td>
                <td>Maria Sousa</td>
                <td>maria@gmail.com</td>
                <td>
                    <button class="btn btn-outline-success">Visualizar</button>
                    <button class="btn btn-outline-warning">Editar</button>
                    <button class="btn btn-outline-danger">Excluir</button>
                </td>
            </tr>
            <tr>
                <td>02</td>
                <td>Maria Sousa</td>
                <td>maria@gmail.com</td>
                <td>
                    <button class="btn btn-outline-success">Visualizar</button>
                    <button class="btn btn-outline-warning">Editar</button>
                    <button class="btn btn-outline-danger">Excluir</button>
                </td>
            </tr>
        </tbody>
    </table>
    </div>

    <script>
        function Inserir(){
            alert('Inserido com sucesso')
        }
    </script>
</body>
</html>