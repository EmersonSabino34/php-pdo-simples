
<?php

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
// $nome = $_POST['nome'];
// $nivel = $_POST['nivel'];
// echo $nivel;

$query_inserir = "INSERT INTO gestor VALUES(:nome, :email, :telefone, :senha, :nivel)";

// $stm_inserir = $conn->prepare($query_inserir);
// $stm_inserir->bindParam(':nome', $dados['nome']);
// $stm_inserir->bindParam(':email', $dados['email']);
// $stm_inserir->bindParam(':telefone', $dados['telefone']);
// $stm_inserir->bindParam(':senha', $dados['senha']);
// $stm_inserir->bindParam(':nivel', $dados['nivel']);


print_r($dados);
?>