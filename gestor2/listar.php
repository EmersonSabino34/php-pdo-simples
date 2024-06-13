<?php
include_once "../conexao.php";
// https://www.youtube.com/watch?v=3wZIAyRmXV4&list=PLmY5AEiqDWwCYMSZd00-B_RdRneU9_eun&index=1

$sql_users = " SELECT * FROM users ORDER BY nome ASC";
$result_users = $conn->prepare($sql_users);
$result_users->execute();

if(($result_users) and ($result_users-> rowCount() != 0)){
    
    $dados = "<table>";
        $dados .= "<thead>";
        $dados .= "<tr>";
        $dados .= "<th>ID</th>";
        $dados .= "<th>Nome</th>";
        $dados .= "<th>E-mail</th>";
        
        $dados .= "<th>Ações</th>";
        $dados .= "</tr>";
        $dados .= "</thead>";
        $dados .= "<tbody>";
    while($row_users = $result_users->fetch(PDO::FETCH_ASSOC)){
        // var_dump($row_users);
        extract($row_users);

        $dados .= "<tr>";
        $dados .= "<td>$id</td>";
        $dados .= "<td>$nome</td>";
        $dados .= "<td>$email</td>";

        $dados .= "<td>Visualizar</td>";
        $dados .= "<td>Editar</td>";
        $dados .= "<td>Excluir</td>";
        $dados .= "</tr>";
        $dados .= "</tbody>";
        $dados .= "</table>";
    }
    $dados .= "</tbody>";
    $dados .= "</table>";
    $retorna = [
        'status' => true, 
        'dados' => $dados
    ];
}else{
    $retorna = ['status' => false, 'msg' => "<p style='color: #f00;'> Error:
    Nenhum usuário encontrado!</p>"];
}
echo json_encode($retorna);