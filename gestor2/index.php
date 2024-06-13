<div class="jumbotron text-center">
        <!-- <h3 class="text-end"><?php print "Olá, " . $_SESSION["usuario"]; ?></h3> -->
        <h1>Cadastro de Gestores</h1>
    </div>
    <form action="gestor.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="Nome">Nome</label>
                <input type="text" name="nome" class="form-control">
            </div>
            <div class="col-md-2">
                <label for="email">email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="col-md-2">
                <label for="telefone">telefone</label>
                <input type="text" name="telefone" class="form-control">
            </div>
        </div>
        <div class="row">
        <div class="col-md-6">
                <label for="senha">senha</label>
                <input type="password" name="senha" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="nivel">nivel</label>
                <select type="text" name="nivel" class="form-control">
                    <option disabled selected>Selecionar</option>
                    <option value="admin">Admin</option>
                    <option value="teste">Padrão</option>
                </select>
            </div>
        </div>
        <!-- onclick="Inserir()"  -->
        <button type="submit" class="btn btn-outline-primary mt-3">Cadastrar</button>
    </form>

    <table class="table striped mt-5">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Serie</th>
                <th>Turma</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Edson Emanoel</td>
                <td>7 ano</td>
                <td>B</td>
            </tr>
            <tr>
                <td>Aline Silva</td>
                <td>7 ano</td>
                <td>B</td>
            </tr>
        </tbody>
    </table>
    </div>

    <script>
        // function Inserir(){
        //     alert('Inserido com sucesso')
        // }
    </script>
</body>
</html>